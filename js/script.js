document.addEventListener("DOMContentLoaded", function () {
  // Set current year in copyright
  document.getElementById("current-year").textContent =
    new Date().getFullYear();

  // Navbar scroll effect
  const navbar = document.querySelector(".navbar");
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // Mobile menu toggle
  const menuToggle = document.getElementById("menuToggle");
  const navbarMenu = document.getElementById("navbarMenu");

  menuToggle.addEventListener("click", function () {
    navbarMenu.classList.toggle("show");
  });

  // Form validation and submission
  const form = document.getElementById("registrationForm");
  const successMessage = document.getElementById("success-message");
  const newFormBtn = document.getElementById("newFormBtn");
  const submitButton = document.getElementById("submitButton");
  const btnText = submitButton.querySelector(".btn-text");
  const btnLoading = submitButton.querySelector(".btn-loading");

  // Show/hide conditional fields based on selections
  const activityWorkshop = document.getElementById("activity-workshop");
  const workshopDetailsContainer = document.getElementById(
    "workshop-details-container"
  );

  activityWorkshop.addEventListener("change", function () {
    workshopDetailsContainer.style.display = this.checked ? "block" : "none";
  });

  const activityAndere = document.getElementById("activity-andere");
  const otherActivityContainer = document.getElementById(
    "other-activity-container"
  );

  activityAndere.addEventListener("change", function () {
    otherActivityContainer.style.display = this.checked ? "block" : "none";
  });

  const medicalConditionsYes = document.getElementById("medicalConditions-yes");
  const medicalConditionsNo = document.getElementById("medicalConditions-no");
  const medicalDetailsContainer = document.getElementById(
    "medical-details-container"
  );

  medicalConditionsYes.addEventListener("change", function () {
    medicalDetailsContainer.style.display = this.checked ? "block" : "none";
  });

  medicalConditionsNo.addEventListener("change", function () {
    medicalDetailsContainer.style.display = "none";
  });

  const medicationYes = document.getElementById("medication-yes");
  const medicationNo = document.getElementById("medication-no");
  const medicationDetailsContainer = document.getElementById(
    "medication-details-container"
  );

  medicationYes.addEventListener("change", function () {
    medicationDetailsContainer.style.display = this.checked ? "block" : "none";
  });

  medicationNo.addEventListener("change", function () {
    medicationDetailsContainer.style.display = "none";
  });

  // Form validation
  function validateForm() {
    let isValid = true;
    clearErrors();

    // Validate required fields
    const requiredFields = [
      { id: "fullName", message: "Naam is verplicht" },
      { id: "birthDate", message: "Geboortedatum is verplicht" },
      { id: "address", message: "Adres is verplicht" },
      { id: "postalCode", message: "Postcode is verplicht" },
      { id: "city", message: "Woonplaats is verplicht" },
      { id: "phone", message: "Telefoonnummer is verplicht" },
      { id: "email", message: "E-mailadres is verplicht" },
    ];

    requiredFields.forEach((field) => {
      const input = document.getElementById(field.id);
      if (!input.value.trim()) {
        showError(field.id, field.message);
        isValid = false;
      }
    });

    // Validate email format
    const email = document.getElementById("email");
    if (email.value.trim() && !isValidEmail(email.value)) {
      showError("email", "Ongeldig e-mailadres");
      isValid = false;
    }

    // Validate guardian email if provided
    const guardianEmail = document.getElementById("guardianEmail");
    if (guardianEmail.value.trim() && !isValidEmail(guardianEmail.value)) {
      showError("guardianEmail", "Ongeldig e-mailadres");
      isValid = false;
    }

    // Validate postal code format (Dutch format: 1234 AB)
    const postalCode = document.getElementById("postalCode");
    if (postalCode.value.trim() && !isValidPostalCode(postalCode.value)) {
      showError("postalCode", "Ongeldige postcode. Gebruik formaat: 1234 AB");
      isValid = false;
    }

    // Validate at least one activity is selected
    const activities = document.querySelectorAll(
      'input[name="activities"]:checked'
    );
    if (activities.length === 0) {
      showError("activities", "Selecteer minimaal één activiteit");
      isValid = false;
    }

    // Validate terms agreement
    const termsAgreed = document.getElementById("termsAgreed");
    if (!termsAgreed.checked) {
      showError(
        "termsAgreed",
        "Je moet akkoord gaan met de algemene voorwaarden"
      );
      isValid = false;
    }

    return isValid;
  }

  function isValidEmail(email) {
    const re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  function isValidPostalCode(postalCode) {
    const re = /^[1-9][0-9]{3} ?(?!sa|sd|ss)[a-z]{2}$/i;
    return re.test(String(postalCode).toLowerCase());
  }

  function showError(fieldId, message) {
    const errorElement = document.getElementById(`${fieldId}-error`);
    if (errorElement) {
      errorElement.textContent = message;
    }

    const field = document.getElementById(fieldId);
    if (field) {
      field.classList.add("is-invalid");
    }
  }

  function clearErrors() {
    const errorElements = document.querySelectorAll(".error-message");
    errorElements.forEach((element) => {
      element.textContent = "";
    });

    const invalidFields = document.querySelectorAll(".is-invalid");
    invalidFields.forEach((field) => {
      field.classList.remove("is-invalid");
    });
  }

  // Form submission with EmailJS
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    if (!validateForm()) {
      // Scroll to the first error
      const firstError = document.querySelector(".error-message:not(:empty)");
      if (firstError) {
        firstError.scrollIntoView({ behavior: "smooth", block: "center" });
      }
      return;
    }

    // Show loading state
    btnText.style.display = "none";
    btnLoading.style.display = "inline-block";
    submitButton.disabled = true;

    // Collect form data
    const formData = new FormData(form);
    const formDataObj = {};

    formData.forEach((value, key) => {
      // Handle checkboxes (activities)
      if (key === "activities") {
        if (!formDataObj[key]) {
          formDataObj[key] = [];
        }
        formDataObj[key].push(value);
      } else {
        formDataObj[key] = value;
      }
    });

    // const formSubmitEmail = 'hjvanderkooij@outlook.com'; // Replace with your email
    // form.action = `https://formsubmit.co/${formSubmitEmail}`;
    // form.method = 'POST';

    // // Add hidden fields for FormSubmit configuration
    // const redirectInput = document.createElement('input');
    // redirectInput.type = 'hidden';
    // redirectInput.name = '_next';
    // redirectInput.value = window.location.href; // Redirect back to the same page
    // form.appendChild(redirectInput);

    // const subjectInput = document.createElement('input');
    // subjectInput.type = 'hidden';
    // subjectInput.name = '_subject';
    // subjectInput.value = 'Nieuwe inschrijving Mark Sluis Training';
    // form.appendChild(subjectInput);

    // // Submit the form
    // form.submit();

    // Option 2: Use EmailJS (requires account)
    // Uncomment and add your EmailJS credentials to use this method

    emailjs.init("qiYHCFZYiQAZnBtk4"); // Your EmailJS Public Key

    emailjs
      .send("service_fcdjax5", "template_0bst8c8", {
        name: formDataObj.fullName,
        email: formDataObj.email,
        activities: formDataObj.activities
          ? formDataObj.activities.join(", ")
          : "",
        phone: formDataObj.phone,
        address: `${formDataObj.address}, ${formDataObj.postalCode} ${formDataObj.city}`,
        birthDate: formDataObj.birthDate,
        medicalInfo:
          formDataObj.hasMedicalConditions === "ja"
            ? formDataObj.medicalDetails
            : "Geen",
        medication:
          formDataObj.usesMedication === "ja"
            ? formDataObj.medicationDetails
            : "Geen",
        guardian: formDataObj.guardianName
          ? `${formDataObj.guardianName} (${formDataObj.guardianPhone}, ${formDataObj.guardianEmail})`
          : "N/A",
        payment: formDataObj.paymentMethod,
        photoConsent: formDataObj.photoConsent,
      })

      .then(
        function (response) {
          console.log("Email sent successfully:", response);
          // Show success message
          form.style.display = "none";
          successMessage.style.display = "block";

          // Reset form state
          btnText.style.display = "inline-block";
          btnLoading.style.display = "none";
          submitButton.disabled = false;

          // Scroll to success message
          successMessage.scrollIntoView({
            behavior: "smooth",
            block: "center",
          });
        },
        function (error) {
          console.error("Email sending failed:", error);
          alert(
            "Er is iets misgegaan bij het verzenden van het formulier. Probeer het later opnieuw."
          );

          // Reset button state
          btnText.style.display = "inline-block";
          btnLoading.style.display = "none";
          submitButton.disabled = false;
        }
      );

    // For demonstration purposes (remove in production)
    // Simulate form submission
    setTimeout(() => {
      // Log form data to console
      console.log("Form submission data:", formDataObj);

      // Store in localStorage (optional, for demonstration)
      const submissions = JSON.parse(
        localStorage.getItem("formSubmissions") || "[]"
      );
      submissions.push({
        id: Date.now(),
        timestamp: new Date().toISOString(),
        data: formDataObj,
      });
      localStorage.setItem("formSubmissions", JSON.stringify(submissions));

      // Show success message
      form.style.display = "none";
      successMessage.style.display = "block";

      // Reset form state
      btnText.style.display = "inline-block";
      btnLoading.style.display = "none";
      submitButton.disabled = false;

      // Scroll to success message
      successMessage.scrollIntoView({ behavior: "smooth", block: "center" });
    }, 1500); // Simulate network delay
  });

  // New form button
  newFormBtn.addEventListener("click", function () {
    form.reset();
    form.style.display = "block";
    successMessage.style.display = "none";

    // Reset conditional fields
    workshopDetailsContainer.style.display = "none";
    otherActivityContainer.style.display = "none";
    medicalDetailsContainer.style.display = "none";
    medicationDetailsContainer.style.display = "none";

    // Scroll to form
    form.scrollIntoView({ behavior: "smooth", block: "start" });
  });
});
