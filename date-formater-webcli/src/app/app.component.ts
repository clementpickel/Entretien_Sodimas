// app.component.ts
import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'date-formater-webcli';
  userInput: string = '';
  result: string = '';

  constructor(private httpClient: HttpClient) {}

  convertArabToRoman(): void {
    const apiUrl = `http://127.0.0.1:8000/api/date-formater/arab-to-roman?date=${encodeURIComponent(this.userInput)}`;

    this.httpClient.get(apiUrl).subscribe(
      (response: any) => {
        // Assuming the API returns a JSON object with a 'result' property
        this.result = response.converted_date;
      },
      (error) => {
        console.error('Error:', error);
      }
    );
  }
}
