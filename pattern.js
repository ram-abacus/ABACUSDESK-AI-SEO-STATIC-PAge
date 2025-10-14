document.addEventListener("DOMContentLoaded", function() {
  // --- Get All Form Elements ---
  const submitBtn = document.getElementById("mauticform_input_abacusdeskaiseoform_submit");
  const nameInput = document.getElementById("mauticform_input_abacusdeskaiseoform_f_name");
  const emailInput = document.getElementById("mauticform_input_abacusdeskaiseoform_email");
  const phoneInput = document.getElementById("mauticform_input_abacusdeskaiseoform_phone");
  const companyInput = document.getElementById("mauticform_input_abacusdeskaiseoform_company");
  const websiteInput = document.getElementById("mauticform_input_abacusdeskaiseoform_website1");

  // --- Define Validation Patterns ---
  const nameCompanyPattern = /^[A-Za-z\s]+$/;
  const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const phonePattern = /^\d{10}$/;
  const websitePattern = /^(?:https?:\/\/)?(?:www\.)([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,}(\/[^\s]*)?$/;

  if (submitBtn && nameInput && emailInput && phoneInput && companyInput && websiteInput) {
    
    submitBtn.addEventListener("click", function(event) {
      console.log("--- Validation Started: All fields are mandatory. ---");

      // --- All Fields Are Required ---

      if (!nameCompanyPattern.test(nameInput.value.trim())) {
        event.preventDefault(); event.stopPropagation();
        alert("Please enter a valid name. Only letters and spaces are allowed.");
        return;
      }
      
      if (!emailPattern.test(emailInput.value.trim())) {
        event.preventDefault(); event.stopPropagation();
        alert("Please enter a valid business email address.");
        return; 
      }
      
      if (!phonePattern.test(phoneInput.value.trim())) {
        event.preventDefault(); event.stopPropagation();
        alert("Please enter a valid 10-digit phone number.");
        return;
      }
      
      // ---> MODIFICATION: Company field is now mandatory.
      if (!nameCompanyPattern.test(companyInput.value.trim())) {
        event.preventDefault(); event.stopPropagation();
        alert("Please enter a valid company name. Only letters and spaces are allowed.");
        return;
      }

      // ---> MODIFICATION: Website field is now mandatory.
      if (!websitePattern.test(websiteInput.value.trim())) {
        event.preventDefault(); event.stopPropagation();
        alert("Please enter a valid website URL that starts with 'www'.");
        return;
      }
      
      console.log("All fields are valid. Disabling button and allowing submission.");
      submitBtn.disabled = true;
      submitBtn.innerText = "Submitting...";
      submitBtn.classList.add("opacity-70", "cursor-not-allowed");

    }, true);
    
    document.addEventListener("mauticformSubmitError", function(event) {
      if (event.detail && event.detail.formId == 24) {
        submitBtn.disabled = false;
        submitBtn.innerText = "Book My Free Audit";
        submitBtn.classList.remove("opacity-70", "cursor-not-allowed");
      }
    });
  }
});