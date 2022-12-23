function calculate_age()
{
var birth_date= new Date(document.getElementById("birth_date").value);
var birth_date_day= birth_date.getDate();
var birth_date_month= birth_date.getMonth();
var birth_date_year= birth_date.getYear();

var today_date= new Date();
var today_day= today_date.getDate();
var today_month= today_date.getMonth();
var today_year= today_date.getFullYear();
var calculate_age=0;
if(today_month>birth_date_month) calculate_age=today_year-birth_date_year;
else if(today_month==birth_date-month)
{
    if(today_day>=birth_date_day) calculate_age=today_year-birth_date_year;
    else calculate_age=today_year-birth_date_year-1;
}
else calculate_age= today_year-birth_date_year-1;
    var output value =calculate_age;
   document.getElementByTd("calculate_age").innerHTML= calculate_age;
}
