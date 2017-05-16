function CalcDCI()
{
	if (document.form.cents.value == null || document.form.cents.value.length == 0 ||
        document.form.kilograms.value == null || document.form.kilograms.value.length == 0 ||
        document.form.years.value == null    || document.form.years.value.length == 0)
		{
				return;
		}

	var cents=document.form.cents.value / 2.54;
	var kilograms=document.form.kilograms.value / 0.4536;
    var years=document.form.years.value;
	var factor=document.form.exercise[document.form.exercise.selectedIndex].value;

	// Make the male calculations
    if (document.form.gender[0].checked)
	  {
     	weight = 66 + (13.7 * (kilograms / 2.2));
  		height = 5 * (cents * 2.54);
  		age = 6.8 * years;
      }

    // Make the female calculations
    else
	  {
       weight = 655 + (9.6 * (kilograms / 2.2));
	   height = 1.7 * (cents * 2.54);
	   age = 4.7 * years;
	  }
	  document.form.BMR.value = Math.round(weight + height - age);
	  document.form.tdee.value = document.form.BMR.value * factor;

}
