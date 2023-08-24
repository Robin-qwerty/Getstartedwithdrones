document.addEventListener('DOMContentLoaded', () => {
  const arrows = document.querySelectorAll('.arrow');
  
  arrows.forEach(arrow => {
    arrow.addEventListener('click', () => {
      const infoContainer = arrow.nextElementSibling; // Get the .info-container
      const additionalInfo = infoContainer.querySelector('.additional-info'); // Find the .additional-info within the .info-container
      
      if (additionalInfo) {
        additionalInfo.style.display = additionalInfo.style.display === 'block' ? 'none' : 'block';
        arrow.classList.toggle('flipped'); // Toggle the 'flipped' class
      }
    });
  });
});

const questions = document.querySelectorAll('.question');
const nextBtn = document.getElementById('nextBtn');

const droneTypeOptions = document.getElementsByName('droneType');
const nextBtn1_1 = document.getElementById('nextBtn1_1');
const fpvExperienceOptions = document.getElementsByName('fpvExperience');
const nextBtn2_1 = document.getElementById('nextBtn2_1');
const simulatorInfoBox = document.getElementById("simulatorInfoBox");
const nextBtnSimulatorInfo = document.getElementById("nextBtnSimulatorInfo");
const simulatorExperience = document.getElementsByName('simulatorExperience');
const nextBtn3_1 = document.getElementById('nextBtn3_1');
const diyInterest = document.getElementsByName('diyInterest');
const nextBtn4_1 = document.getElementById('nextBtn4_1');
const primaryGoal = document.getElementsByName('primaryGoal');
const nextBtn5_1 = document.getElementById('nextBtn5_1');
const budgetRange = document.getElementsByName('budgetRange');
const nextBtn6_1 = document.getElementById('nextBtn6_1');
const fpvSystem = document.getElementsByName('fpvSystem');
const nextBtn7_1 = document.getElementById('nextBtn7_1');
const droneSize = document.getElementsByName('droneSize');
const nextBtn8_1 = document.getElementById('nextBtn8_1');
const droneregulationsbasicknowledgeInfoBox = document.getElementById("droneregulationsbasicknowledgeInfoBox");
const nextBtndroneregulationsnotinformedInfo = document.getElementById("nextBtndroneregulationsnotinformedInfo");
const droneregulationsnotinformedInfoBox = document.getElementById("droneregulationsnotinformedInfoBox");
const nextBtndroneregulationsbasicknowledgeInfo = document.getElementById("nextBtndroneregulationsbasicknowledgeInfo");
const regulationsKnowledge = document.getElementsByName('regulationsKnowledge');
const nextBtn9_1 = document.getElementById('nextBtn9_1');
const featurePreference = document.getElementsByName('featurePreference');

const nextBtn1_2 = document.getElementById('nextBtn1_2');
const cameraUseOptions = document.getElementsByName('cameraUse');
const nextBtn2_2 = document.getElementById('nextBtn2_2');
const droneExperienceOptions = document.getElementsByName('droneExperience');
const nextBtn3_2 = document.getElementById('nextBtn3_2');
const cameraQualityOptions = document.getElementsByName('cameraQuality');
const nextBtn4_2 = document.getElementById('nextBtn4_2');
const flightAutomationOptions = document.getElementsByName('flightAutomation');
const nextBtn5_2 = document.getElementById('nextBtn5_2');
const dataCapabilitiesOptions = document.getElementsByName('dataCapabilities');
const nextBtn6_2 = document.getElementById('nextBtn6_2');
const cameraBudgetOptions = document.getElementsByName('cameraBudget');


let userChoices = {}; // Store user's choices

// Function to handle option change and enable/disable next button
function handleOptionChange(options, nextButton) {
  options.forEach(option => {
    option.addEventListener('change', () => {
      if (option.checked) {
        options.forEach(otherOption => {
          if (otherOption !== option) {
            otherOption.checked = false;
          }
        });
        nextButton.disabled = false;
      } else {
        nextButton.disabled = true;
      }
    });
  });
}

function handleCheckboxChange(checkboxes, nextButton) {
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
      const checkedCheckboxes = Array.from(checkboxes).filter(checkbox => checkbox.checked);
      if (checkedCheckboxes.length > 0) {
        nextButton.disabled = false;
      } else {
        nextButton.disabled = true;
      }
    });
  });
}

// Call the function for each set of options and their corresponding "Next" button
handleOptionChange(droneTypeOptions, nextBtn);

handleOptionChange(fpvExperienceOptions, nextBtn1_1);
handleOptionChange(simulatorExperience, nextBtn2_1);
handleOptionChange(diyInterest, nextBtn3_1);
handleOptionChange(primaryGoal, nextBtn4_1);
handleOptionChange(budgetRange, nextBtn5_1);
handleOptionChange(fpvSystem, nextBtn6_1);
handleOptionChange(droneSize, nextBtn7_1);
handleOptionChange(regulationsKnowledge, nextBtn8_1);
handleCheckboxChange(featurePreference, nextBtn9_1);

handleOptionChange(cameraUseOptions, nextBtn1_2);
handleOptionChange(droneExperienceOptions, nextBtn2_2);
handleOptionChange(cameraQualityOptions, nextBtn3_2);
handleOptionChange(flightAutomationOptions, nextBtn4_2);
handleOptionChange(dataCapabilitiesOptions, nextBtn5_2);
handleOptionChange(cameraBudgetOptions, nextBtn6_2);
// Add more calls for other questions...

// Function to show/hide questions
function showQuestions(questionIdsToShow) {
  questions.forEach(question => {
    if (questionIdsToShow.includes(question.id)) {
      question.style.display = 'block';
    } else {
      question.style.display = 'none';
    }
  });
  console.log(userChoices);
}

function showInfo(infoDivId, buttonId) {
  const infoDiv = document.getElementById(infoDivId);
  if (infoDiv) {
    infoDiv.style.display = 'block';
    buttonId.style.display = 'none';
  }
}

function showResults(resultDivId, questionDivId) {
  const resultDiv = document.getElementById(resultDivId);
  const questionDiv = document.getElementById(questionDivId);
  const containerDiv = document.getElementById('container');

  resultDiv.style.display = 'block';
  questionDiv.style.display = 'none';
  containerDiv.style.maxWidth = '1200px';
}



nextBtn.addEventListener('click', () => {
  let selectedType;
  for (const option of droneTypeOptions) {
    if (option.checked) {
      selectedType = option.value;
      break;
    }
  }

  if (selectedType) {
    userChoices['droneType'] = selectedType;

    if (selectedType === 'camera') {
      showQuestions('question1_2');
    } else if (selectedType === 'fpv') {
      showQuestions('question1_1');
    } else if (selectedType === 'unsure') {
      showQuestions(['question0', 'question1_3']);
    }
  }
});

nextBtn1_1.addEventListener('click', () => {
  let selectedExperience;
  for (const option of fpvExperienceOptions) {
    if (option.checked) {
      selectedExperience = option.value;
      break;
    }
  }

  if (selectedExperience) {
    userChoices['fpvExperience'] = selectedExperience;

    if (selectedExperience === 'beginner') {
      showQuestions('question2_1');
    } else if (selectedExperience === 'intermediate' || selectedExperience === 'advanced') {
      showQuestions('question3_1');
    }
  }
});

nextBtn2_1.addEventListener('click', () => {
  let selectedsimulatorExperience;
  for (const option of simulatorExperience) {
    if (option.checked) {
      selectedsimulatorExperience = option.value;
      break;
    }
  }

  if (selectedsimulatorExperience) {
    userChoices['simulatorExperience'] = selectedsimulatorExperience;

    if (selectedsimulatorExperience === 'no') {
      showInfo('simulatorInfoBox', nextBtn2_1);
    } else if (selectedsimulatorExperience === 'yes') {
      showQuestions('question4_1');
    }
  }
});

nextBtnSimulatorInfo.addEventListener('click', () => {
  const question2_1Div = document.getElementById('question2_1');
  const question4_1Div = document.getElementById('question4_1');
  const simulatorInfoBoxDiv = document.getElementById('simulatorInfoBox');

  if (question2_1Div && question4_1Div && simulatorInfoBoxDiv) {
    question2_1Div.style.display = 'none'; // Hide question 2_1 div
    question4_1Div.style.display = 'block'; // Show question 4_1 div
    simulatorInfoBoxDiv.style.display = 'none'; // Hide simulator info div
  }
});

nextBtn3_1.addEventListener('click', () => {
  let selecteddiyInterest;
  for (const option of diyInterest) {
    if (option.checked) {
      selecteddiyInterest = option.value;
      break;
    }
  }

  if (selecteddiyInterest) {
    userChoices['diyInterest'] = selecteddiyInterest;

    // Show question4_1 regardless of the selected experience
    showQuestions('question4_1');
  }
});

nextBtn4_1.addEventListener('click', () => {
  let selectedprimaryGoal;
  for (const option of primaryGoal) {
    if (option.checked) {
      selectedprimaryGoal = option.value;
      break;
    }
  }

  if (selectedprimaryGoal) {
    userChoices['primaryGoal'] = selectedprimaryGoal;

    showQuestions('question5_1');
  }
});

nextBtn5_1.addEventListener('click', () => {
  let selectedbudgetRange;
  for (const option of budgetRange) {
    if (option.checked) {
      selectedbudgetRange = option.value;
      break;
    }
  }

  if (selectedbudgetRange) {
    userChoices['budgetRange'] = selectedbudgetRange;

    if (selectedbudgetRange === 'under400' || selectedbudgetRange === '400-600' || selectedbudgetRange === '600-800' || selectedbudgetRange === '800-1000') {
      showQuestions('question7_1');
    } else if (selectedbudgetRange === '1000-1500' || selectedbudgetRange === '1500-2000' || selectedbudgetRange === '2000+') {
      showQuestions('question6_1');
    }
  }
});

nextBtn6_1.addEventListener('click', () => {
  let selectedfpvSystem;
  for (const option of fpvSystem) {
    if (option.checked) {
      selectedfpvSystem = option.value;
      break;
    }
  }

  if (selectedfpvSystem) {
    userChoices['fpvSystem'] = selectedfpvSystem;

    showQuestions('question7_1');
  }
});

nextBtn7_1.addEventListener('click', () => {
  let selecteddroneSize;
  for (const option of droneSize) {
    if (option.checked) {
      selecteddroneSize = option.value;
      break;
    }
  }

  if (selecteddroneSize) {
    userChoices['droneSize'] = selecteddroneSize;

    showQuestions('question8_1');
  }
});

nextBtn8_1.addEventListener('click', () => {
  let selectedregulationsKnowledge;
  for (const option of regulationsKnowledge) {
    if (option.checked) {
      selectedregulationsKnowledge = option.value;
      break;
    }
  }

  if (selectedregulationsKnowledge) {
    userChoices['regulationsKnowledge'] = selectedregulationsKnowledge;

    if (selectedregulationsKnowledge === 'well_informed') {
      showQuestions('question9_1');
    } else if (selectedregulationsKnowledge === 'basic_knowledge') {
      showInfo('droneregulationsbasicknowledgeInfoBox', nextBtn8_1);
    } else if (selectedregulationsKnowledge === 'not_informed') {
      showInfo('droneregulationsnotinformedInfoBox', nextBtn8_1);
    }
  }
});

nextBtndroneregulationsbasicknowledgeInfo.addEventListener('click', () => {
  const question8_1Div = document.getElementById('question8_1');
  const question9_1Div = document.getElementById('question9_1');
  const droneregulationsbasicknowledgeInfoBoxDiv = document.getElementById('droneregulationsbasicknowledgeInfoBox');

  if (question8_1Div && question9_1Div && droneregulationsbasicknowledgeInfoBoxDiv) {
    question8_1Div.style.display = 'none';
    question9_1Div.style.display = 'block';
    droneregulationsbasicknowledgeInfoBoxDiv.style.display = 'none';
  }
});

nextBtndroneregulationsnotinformedInfo.addEventListener('click', () => {
  const question8_1Div = document.getElementById('question8_1');
  const question9_1Div = document.getElementById('question9_1');
  const droneregulationsnotinformedInfoBoxDiv = document.getElementById('droneregulationsnotinformedInfoBox');

  if (question8_1Div && question9_1Div && droneregulationsnotinformedInfoBoxDiv) {
    question8_1Div.style.display = 'none';
    question9_1Div.style.display = 'block';
    droneregulationsnotinformedInfoBoxDiv.style.display = 'none';
  }
});

nextBtn9_1.addEventListener('click', () => {
  let selectedFeaturePreferences = [];
  for (const option of featurePreference) {
    if (option.checked) {
      selectedFeaturePreferences.push(option.value);
    }
  }

  console.log(selectedFeaturePreferences); // Add this line

  if (selectedFeaturePreferences.length > 0) {
    userChoices['featurePreference'] = selectedFeaturePreferences;

    console.log(userChoices);

    showResults('droneCards', 'question9_1');
  }
});



nextBtn1_2.addEventListener('click', () => {
  let selectedcameraUse;
  for (const option of cameraUseOptions) {
    if (option.checked) {
      selectedcameraUse = option.value;
      break;
    }
  }

  if (selectedcameraUse) {
    userChoices['fpvExperience'] = selectedcameraUse;

    if (selectedcameraUse === 'personal' || selectedcameraUse === 'professional') {
      showQuestions('question2_2');
    } else if (selectedcameraUse === 'mapping') {
      showQuestions('question5_2');
    }
  }
});

nextBtn2_2.addEventListener('click', () => {
  let selecteddroneExperience;
  for (const option of droneExperienceOptions) {
    if (option.checked) {
      selecteddroneExperience = option.value;
      break;
    }
  }

  if (selecteddroneExperience) {
    userChoices['droneExperience'] = selecteddroneExperience;

    showQuestions('question3_2');
  }
});

nextBtn3_2.addEventListener('click', () => {
  let selectedcameraQuality;
  for (const option of cameraQualityOptions) {
    if (option.checked) {
      selectedcameraQuality = option.value;
      break;
    }
  }

  if (selectedcameraQuality) {
    userChoices['cameraQuality'] = selectedcameraQuality;

    showQuestions('question4_2');
  }
});

nextBtn4_2.addEventListener('click', () => {
  let selectedflightAutomatione;
  for (const option of flightAutomationOptions) {
    if (option.checked) {
      selectedflightAutomatione = option.value;
      break;
    }
  }

  if (selectedflightAutomatione) {
    userChoices['flightAutomation'] = selectedflightAutomatione;

    showQuestions('question5_2');
  }
});

nextBtn5_2.addEventListener('click', () => {
  let selecteddataCapabilities;
  for (const option of dataCapabilitiesOptions) {
    if (option.checked) {
      selecteddataCapabilities = option.value;
      break;
    }
  }

  if (selecteddataCapabilities) {
    userChoices['dataCapabilities'] = selecteddataCapabilities;

    showQuestions('question6_2');
  }
});

nextBtn6_2.addEventListener('click', () => {
  let selectedcameraBudget;
  for (const option of cameraBudgetOptions) {
    if (option.checked) {
      selectedcameraBudget = option.value;
      break;
    }
  }

  if (selectedcameraBudget) {
    userChoices['cameraBudget'] = selectedcameraBudget;

    console.log(userChoices);

    // Show next question or perform further actions based on the selected feature preferences
  }
});
