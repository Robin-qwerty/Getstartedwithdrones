<script>
    const questions = document.querySelectorAll('.question');
    const nextBtn = document.getElementById('nextBtn');
    const droneTypeOptions = document.getElementsByName('droneType');
    const nextBtn1_2 = document.getElementById('nextBtn1_2');
    const cameraUseOptions = document.getElementsByName('cameraUse');
    const nextBtn1_1 = document.getElementById('nextBtn1_1');
    const fpvExperienceOptions = document.getElementsByName('fpvExperience');
    const nextBtn2_1 = document.getElementById('nextBtn2_1');
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
    const featurePreference = document.getElementsByName('featurePreference');
  
    let userChoices = {}; // Store user's choices
  
    // const nextBtns = {
    //   'question1_1': nextBtn1_1,
    //   'question2_1': nextBtn2_1,
    //   'question3_1': nextBtn3_1,
    //   'question4_1': nextBtn4_1,
    //   'question5_1': nextBtn5_1,
    //   'question6_1': nextBtn6_1,
    //   'question7_1': nextBtn7_1,
    //   'question8_1': nextBtn8_1
    // };

    // fpvExperienceOptions.forEach(option => {
    //   option.addEventListener('change', () => {
    //     const nextQuestionId = option.dataset.nextQuestion;
    //     if (nextQuestionId) {
    //       enableNextButton(nextBtns[nextQuestionId]);
    //     }
    //   });
    // });

    // function enableNextButton(button) {
    //   if (button) {
    //     button.disabled = false;
    //   }
    // }

    droneTypeOptions.forEach(option => {
      option.addEventListener('change', () => {
        nextBtn.disabled = false; // Enable the button when an option is selected
      });
    });
  
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
  
        // Hide the current question and show the appropriate next question
        const currentQuestion0 = document.querySelector('#question0');
        const currentQuestion1_3 = document.querySelector('#question1_3');
        currentQuestion0.style.display = 'none';
        currentQuestion1_3.style.display = 'none';
  
        if (selectedType === 'camera') {
          const nextQuestion = document.querySelector('#question1_2');
          nextQuestion.style.display = 'block';
        } else if (selectedType === 'fpv') {
          const nextQuestion = document.querySelector('#question1_1');
          nextQuestion.style.display = 'block';
        } else if (selectedType === 'unsure') {
          const nextQuestion = document.querySelector('#question1_3');
          nextQuestion.style.display = 'block';
          currentQuestion0.style.display = 'block';
        }
  
        // You can continue this pattern for each question
      }
    });


    
    fpvExperienceOptions.forEach(option => {
      option.addEventListener('change', () => {
        nextBtn1_1.disabled = false; // Enable the button when an option is selected
      });
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
        userChoices['droneType'] = selectedExperience;
  
        // Hide the current question and show the appropriate next question
        const currentQuestion1_1 = document.querySelector('#question1_1');
        currentQuestion1_1.style.display = 'none';
  
        if (selectedExperience === 'beginner') {
          const nextQuestion = document.querySelector('#question2_1');
          nextQuestion.style.display = 'block';
        } else if (selectedExperience === 'intermediate' || selectedExperience === 'advanced') {
          const nextQuestion = document.querySelector('#question3_1');
          nextQuestion.style.display = 'block';
        }
  
        // You can continue this pattern for each question
      }
    });





    cameraUseOptions.forEach(option => {
      option.addEventListener('change', () => {
        nextBtn1_2.disabled = false;
      });
    });
  
    // Similar logic for the nextBtn1_2 and nextBtn1_1 buttons...
  
</script>  