document.addEventListener("DOMContentLoaded", () => {
    const inputs = document.querySelectorAll(".code-input");
    const submitButton = document.getElementById("submit-code");
  
    const checkAndSubmit = () => {
      const allFilled = Array.from(inputs).every(input => input.value.length === 1);
      if (allFilled) {
        submitButton.click();
      }
    };
  
    inputs.forEach((input, index) => {
      input.addEventListener("input", (e) => {
        const value = e.target.value;
  
        if (value.length === 1 && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
  
        checkAndSubmit();
      });
  
      input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && !input.value && index > 0) {
          inputs[index - 1].focus();
        }
      });
    });
  
    inputs[0].parentNode.addEventListener("paste", (e) => {
      const pastedData = e.clipboardData.getData("text");
      if (/^\d{6}$/.test(pastedData)) {
        inputs.forEach((input, i) => {
          input.value = pastedData[i] || "";
        });
        inputs[inputs.length - 1].focus();
        checkAndSubmit();
      }
      e.preventDefault();
    });
  
    submitButton.addEventListener("click", () => {
      const code = Array.from(inputs).map(input => input.value).join("");
      console.log("Code complet :", code);
    });
  });
  