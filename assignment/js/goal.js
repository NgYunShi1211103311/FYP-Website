function updateDropdown(dropdown){
    const status = dropdown.value;

    if(status === "complete"){
        dropdown.style.backgroundColor = "green";
        dropdown.style.color = "white";

    }else if(status === "working"){
        dropdown.style.backgroundColor = "blue";
        dropdown.style.color = "white";

    }else if(status === "incomplete"){
        dropdown.style.backgroundColor = "red";
        dropdown.style.color = "white";
    }else{
        dropdown.style.backgroundColor = "white";
        dropdown.style.color = "black";
    }
}

document.addEventListener("DOMContentLoaded", function(){
    // select dropdowns with status class
    document.querySelectorAll(".status").forEach(dropdown => {
        // apply styles based on value
        updateDropdown(dropdown);

        // listen for changes and update styles
        dropdown.addEventListener("change", function(){
            updateDropdown(dropdown);
        });
    });
});
