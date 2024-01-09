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
        list($day, $month, $year) = explode('/', $date);
        $romanDay = $this->intToRoman($day);
        $romanMonth = $this->intToRoman($month);
        $romanYear = $this->intToRoman($year);
        $romanDate = "$romanDay - $romanMonth - $romanYear";
        return $romanDate;
    }

    private function intToRoman($num)
    {
        $result = '';

        $romanNumerals = array('M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
        $values = array(1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);

        for ($i = 0; $i < count($values); $i++) {
            while ($num >= $values[$i]) {
                $result .= $romanNumerals[$i];
                $num -= $values[$i];
            }
        }
        return $result;
    }
}

