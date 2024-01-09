<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChangeDateController extends AbstractController
{
    #[Route('/api/date-formater/arab-to-roman', name: 'arab_to_roman', methods: ['GET'])]
    public function arabToRoman(Request $request): JsonResponse
    {
        $date = $request->query->get('date');

        $convertedDate = $this->convertArabToRoman($date);

        return $this->json([
            'message' => 'Arab to Roman conversion successful.',
            'input_date' => $date,
            'converted_date' => $convertedDate,
        ]);
    }

    private function convertArabToRoman($date)
    {
        $romanNumerals = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X');
        $months = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');

        list($day, $month, $year) = explode('/', $date);

        $romanDay = $romanNumerals[intval($day)];
        $romanYear = '';
        $thousands = intval($year / 1000);
        $hundreds = ($year % 1000) / 100;
        $tens = ($year % 100) / 10;
        $units = $year % 10;

        $romanYear .= str_repeat('M', $thousands);
        $romanYear .= ($hundreds == 9) ? 'CM' : (($hundreds == 4) ? 'CD' : str_repeat('D', intval($hundreds / 5)) . str_repeat('C', $hundreds % 5));
        $romanYear .= ($tens == 9) ? 'XC' : (($tens == 4) ? 'XL' : str_repeat('L', intval($tens / 5)) . str_repeat('X', $tens % 5));
        $romanYear .= ($units == 9) ? 'IX' : (($units == 4) ? 'IV' : str_repeat('V', intval($units / 5)) . str_repeat('I', $units % 5));

        $romanDate = "$romanDay - {$months[intval($month)]} - $romanYear";

        return $romanDate;
    }
}

