function checkTimeDate(timeInputId, dateInputId) {
    const selectedTime = document.getElementById(timeInputId).value;
    const selectedDate = document.getElementById(dateInputId).value;
    const currentDateTime = new Date();

    if (!selectedDate || !selectedTime) {
        alert("Please select both date and time.");
        return false;
    }

    // combine selected date and time to selectedDateTime
    const selectedDateTime = new Date(selectedDate);
    const [hours, minutes] = selectedTime.split(":").map(Number); // split time into hours and minutes
    selectedDateTime.setHours(hours, minutes, 0, 0); // set to selectedDateTime

    // compare selectedDateTime with currentDateTime
    if (selectedDateTime < currentDateTime) {
        alert("The selected date or time is in the past.");
        document.getElementById(dateInputId).value = ""; 
        document.getElementById(timeInputId).value = ""; 
        return false;
    }
    return true;
}
