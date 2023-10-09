<div class="questioning_container" id="questioning_container">
    <h1>Get started with drones</h1>

    <div id="droneCards" style="display: none;">
      <div class="drone-cards">
        <div class="drone-card">
          <img src="media/drone1.jpg" alt="Drone 1">
          <h3>Drone Model 1</h3>
          <p>5 inches freestyle quad</p>
          <p>Weight: 250g</p>
          <p>Video System: analog</p>
          <!-- Add more details as needed -->
          <a class="learn-more-btn" href="#">Learn More</a>
        </div>
        
        <div class="drone-card">
          <img src="media/drone2.jpg" alt="Drone 2">
          <h3>Drone Model 2</h3>
          <p>5 inches - cine</p>
          <p>Weight: 350g</p>
          <p>Video System: dji O3</p>
          <!-- Add more details as needed -->
          <a class="learn-more-btn" href="#">Learn More</a>
        </div>
        
        <div class="drone-card">
          <img src="media/drone3.jpg" alt="Drone 2">
          <h3>Drone Model 3</h3>
          <p>3 inches - freestyle quad</p>
          <p>Weight: 150g</p>
          <p>Video System: analog</p>
          <!-- Add more details as needed -->
          <a class="learn-more-btn" href="#">Learn More</a>
        </div>

        <div class="drone-card">
          <img src="media/drone4.jpg" alt="Drone 2">
          <h3>Drone Model 4</h3>
          <p>5 inches - freestyle quad</p>
          <p>Weight: 550g</p>
          <p>Video System: walksnail</p>
          <!-- Add more details as needed -->
          <a class="learn-more-btn" href="#">Learn More</a>
        </div>
      </div>
    </div>
    

    <div class="question" id="question0">
      <h2>What kind of drone are you interested in?</h2>
      <div class="options">
        <div class="option">
          <input type="radio" name="droneType" value="camera" id="cameraOption">
          <label for="cameraOption">A camera drone for photography and videography</label>
          <div class="arrow">▼</div>
          <div class="info-container">
            <div class="additional-info">Additional information about camera drones.</div>
          </div>
        </div>
        <div class="option">
          <input type="radio" name="droneType" value="fpv" id="fpvOption">
          <label for="fpvOption">An FPV racing drone for acrobatic flying and racing</label>
          <div class="arrow">▼</div>
          <div class="info-container">
            <div class="additional-info">Additional information about camera drones.</div>
          </div>
        </div>
        <div class="option">
          <input type="radio" name="droneType" value="unsure" id="unsureOption">
          <label for="unsureOption">I'm not sure yet, I'd like more information about the different types of drones and their uses</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn" disabled>Next</button>
      </div>
    </div>

    <!-- Question 1.3: Not Sure Yet -->
    <div class="question" id="question1_3" style="display: none;">
      <h2>If the user chooses "I'm not sure yet, I'd like more information about the different types of drones and their uses":</h2>
      <div class="info-box">
        <h3>Camera Drones:</h3>
        <p><strong>Use:</strong> Aerial photography and videography.</p>
        <p><strong>Common Applications:</strong> Capturing stunning aerial views, filming events, real estate photography, filmmaking, and more.</p>
      </div>
      <div class="info-box">
        <h3>FPV Racing Drones:</h3>
        <p><strong>Use:</strong> Acrobatic flying and racing.</p>
        <p><strong>Common Applications:</strong> Participating in thrilling drone racing events, performing aerial stunts and tricks, exploring unique perspectives through goggles.</p>
      </div>
      <div class="info-box">
        <h3>FPV Cinematic Drones:</h3>
        <p><strong>Use:</strong> Aerial filmmaking and creative content creation.</p>
        <p><strong>Common Applications:</strong> Capturing dynamic and cinematic shots, creating visually engaging content for films, commercials, and online media.</p>
      </div>
      <div class="info-box">
        <h3>Aerial Surveying Drones:</h3>
        <p><strong>Use:</strong> Gathering data for mapping and analysis.</p>
        <p><strong>Common Applications:</strong> Land surveying, mapping terrain, creating 3D models, monitoring agricultural fields, and inspecting large structures.</p>
      </div>
      <div class="info-box">
        <h3>Environmental Monitoring Drones:</h3>
        <p><strong>Use:</strong> Studying natural environments and ecosystems.</p>
        <p><strong>Common Applications:</strong> Tracking wildlife, monitoring pollution levels, analyzing deforestation, studying climate patterns.</p>
      </div>
      <div class="info-box">
        <h3>Scientific Research Drones:</h3>
        <p><strong>Use:</strong> Conducting experiments and data collection.</p>
        <p><strong>Common Applications:</strong> Studying wildlife behavior, analyzing atmospheric conditions, tracking migratory patterns, and observing natural phenomena.</p>
      </div>
    </div>
  
    <!-- Question 1.1: FPV Drone -->
    <div class="question" id="question1_1" style="display: none;">
      <h2>If the user chooses "b. An FPV racing drone for acrobatic flying and racing (self-build)":</h2>
      <h3>What's your experience level with FPV flying?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="fpvExperience" value="beginner" id="beginnerOption">
          <label for="beginnerOption">Beginner, I'm new to FPV drones and want a user-friendly setup</label>
        </div>
        <div class="option">
          <input type="radio" name="fpvExperience" value="intermediate" id="intermediateOption">
          <label for="intermediateOption">Intermediate, I have some experience with pre-built FPV drones</label>
        </div>
        <div class="option">
          <input type="radio" name="fpvExperience" value="advanced" id="advancedOption">
          <label for="advancedOption">Advanced, I'm experienced and want to build a custom setup</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn1_1" disabled>Next</button>
      </div>
    </div>

    <!-- Question 2.1: FPV Simulator Experience -->
    <div class="question" id="question2_1" style="display: none;">
      <h2>If the user chooses "Beginner, I'm new to FPV drones and want a user-friendly setup":</h2>
      <h3>Have you flown in a simulator before like Liftoff, DRL, or Velocidrone?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="simulatorExperience" value="yes" id="simulatorYesOption">
          <label for="simulatorYesOption">Yes, I have some practice in an FPV simulator</label>
        </div>
        <div class="option">
          <input type="radio" name="simulatorExperience" value="no" id="simulatorNoOption">
          <label for="simulatorNoOption">No, I have not</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn2_1" disabled>Next</button>
      </div>
    </div>

    <!-- Information Box: Why Try a Simulator -->
    <div class="info-box" id="simulatorInfoBox" style="display: none;">
      <h3>Why You Should Try a Simulator Before Buying an FPV Drone</h3>
      <p>Using an FPV simulator allows you to practice flying and develop your skills in a risk-free virtual environment. Simulators help you learn the basics of drone control, improve your reaction times, and understand flight dynamics before flying a real drone. This experience can save you from crashes and frustration while building your confidence as a pilot.</p>
      <br>
      <p>Here are some good options for transmitters to use in a simulator that you can later use for your real drone:</p>
      <div class="transmitter-container">
        <div class="transmitter-card">
          <img src="media/drone1.jpg" alt="Transmitter 1">
          <h3>Radiomaster TX16S</h3>
          <p>Good and populair transmitter</p>
          <p>Buildin protocol: FRsky/ELRS</p>
          <p>Price: 250$</p>
          <hr>
          <a class="learn-more-btn" target="_blank" href="#">Learn More</a>
        </div>
        <div class="transmitter-card">
          <img src="media/drone2.jpg" alt="Transmitter 2">
          <h3>Radiomaster TX12</h3>
          <p>Really good but low budget transmitter to get started</p>
          <p>Buildin protocol: FRsky/ELRS</p>
          <p>Price: 80$</p>
          <hr>
          <a class="learn-more-btn" target="_blank" href="#">Learn More</a>
        </div>
      </div>
      <hr>
      <br>
      <div class="btn-container">
        <button id="nextBtnSimulatorInfo">Next</button>
      </div>
    </div>

    <!-- Question 3.1: DIY Drone Building -->
    <div class="question" id="question3_1" style="display: none;">
      <h2>If the user chooses "Intermediate, I have some experience with pre-built FPV drones" or "Advanced, I'm experienced and want to build a custom setup":</h2>
      <h3>Are you interested in DIY drone building and tuning?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="diyInterest" value="yes" id="diyYesOption">
          <label for="diyYesOption">Yes, I enjoy building and customizing my own drones</label>
        </div>
        <div class="option">
          <input type="radio" name="diyInterest" value="no" id="diyNoOption">
          <label for="diyNoOption">No, I prefer a pre-built drone with some customization options</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn3_1" disabled>Next</button>
      </div>
    </div>

    <!-- Question 4.1: Primary Goal for Flying FPV Drones -->
    <div class="question" id="question4_1" style="display: none;">
      <h2>What's your primary goal for flying FPV drones?</h2>
      <div class="options">
        <div class="option">
          <input type="radio" name="primaryGoal" value="scenicViews" id="scenicViewsOption">
          <label for="scenicViewsOption">Exploring and capturing scenic views</label>
        </div>
        <div class="option">
          <input type="radio" name="primaryGoal" value="freestyle" id="freestyleOption">
          <label for="freestyleOption">Performing freestyle tricks and maneuvers</label>
        </div>
        <div class="option">
          <input type="radio" name="primaryGoal" value="racing" id="racingOption">
          <label for="racingOption">Trying out racing for the thrill</label>
        </div>
        <div class="option">
          <input type="radio" name="primaryGoal" value="cinematic" id="cinematicOption">
          <label for="cinematicOption">Indoors/outdoors cinematic FPV shots</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn4_1" disabled>Next</button>
      </div>
    </div>

    <!-- Question 5.1: does the user have any components already -->
    <div class="question" id="question5_1" style="display: none;">
      <h2>Do you already have any of these components that you would like to use for your new drone?</h2>
      <div class="options">
        <div class="option">
          <input type="checkbox" name="components[]" value="transmitter" id="transmitterOption">
          <label for="transmitterOption">A transmitter</label>
        </div>
        <div class="option">
          <input type="checkbox" name="components[]" value="goggles" id="gogglesOption">
          <label for="gogglesOption">FPV goggles</label>
        </div>
        <div class="option">
          <input type="checkbox" name="components[]" value="charger" id="chargerOption">
          <label for="chargerOption">Battery charger</label>
        </div>
        <div class="option">
          <input type="checkbox" name="components[]" value="batteries" id="batteriesOption">
          <label for="batteriesOption">Batteries</label>
        </div>
        <div class="option">
          <input type="radio" name="components[]" value="none" id="noneOption">
          <label for="noneOption">None of the above</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn5_1" disabled>Next</button>
      </div>
    </div>

    <script>
      const noneOption = document.getElementById('noneOption');
      const checkboxOptions = document.querySelectorAll('input[type="checkbox"]');

      noneOption.addEventListener('change', function () {
        if (this.checked) {
          checkboxOptions.forEach(option => {
            option.checked = false;
            option.disabled = true;
          });
        } else {
          checkboxOptions.forEach(option => {
            option.disabled = false;
          });
        }
      });

      // Add an event listener to the "None of the above" radio button.
      noneOption.addEventListener('click', function () {
        if (this.checked) {
          this.checked = false; // Uncheck the button if it's already checked.
        }
      });
    </script>

    <!-- Question 6.1: Budget Range -->
    <div class="question" id="question6_1" style="display: none;">
      <h2>What is your budget range for an FPV drone and everything you need to get started flying?</h2>
      <div class="options">
        <div class="option">
          <input type="radio" name="budgetRange" value="under400" id="budgetUnder400Option">
          <label for="budgetUnder400Option">Under $400</label>
        </div>
        <div class="option">
          <input type="radio" name="budgetRange" value="400-600" id="budget400-600Option">
          <label for="budget400-600Option">$400 - $600</label>
        </div>
        <div class="option">
          <input type="radio" name="budgetRange" value="600-800" id="budget600-800Option">
          <label for="budget600-800Option">$600 - $800</label>
        </div>
        <div class="option">
          <input type="radio" name="budgetRange" value="800-1000" id="budget800-1000Option">
          <label for="budget800-1000Option">$800 - $1000</label>
        </div>
        <div class="option">
          <input type="radio" name="budgetRange" value="1000-1500" id="budget1000-1500Option">
          <label for="budget1000-1500Option">$1000 - $1500</label>
        </div>
        <div class="option">
          <input type="radio" name="budgetRange" value="1500-2000" id="budget1500-2000Option">
          <label for="budget1500-2000Option">$1500 - $2000</label>
        </div>
        <div class="option">
          <input type="radio" name="budgetRange" value="2000+" id="budget2000+Option">
          <label for="budget2000+Option">$2000+</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn6_1" disabled>Next</button>
      </div>
    </div>

    <!-- Question 7.1: FPV System Preference -->
    <div class="question" id="question7_1" style="display: none;">
      <h2>Would you prefer a digital FPV system or an analog FPV system?</h2>
      <div class="options">
        <div class="option">
          <input type="radio" name="fpvSystem" value="digital" id="digitalOption">
          <label for="digitalOption">Digital FPV system</label>
        </div>
        <div class="option">
          <input type="radio" name="fpvSystem" value="analog" id="analogOption">
          <label for="analogOption">Analog FPV system</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn7_1" disabled>Next</button>
      </div>
    </div>

    <!-- Question 8.1: Preferred Drone Size and Prop Size -->
    <div class="question" id="question8_1" style="display: none;">
      <h2>What's your preferred drone size and estimated prop size (in inches)?</h2>
      <div class="options">
        <div class="option">
          <input type="radio" name="droneSize" value="tinyWhoop" id="tinyWhoopOption">
          <label for="tinyWhoopOption">Tiny whoop (65mm or smaller) with 1S/2S battery and around 1” to 1.5" propellers</label>
        </div>
        <div class="option">
          <input type="radio" name="droneSize" value="micro" id="microOption">
          <label for="microOption">Micro (75mm - 150mm) with 2S/3S battery and around 2" to 3.5" propellers</label>
        </div>
        <div class="option">
          <input type="radio" name="droneSize" value="standard" id="standardOption">
          <label for="standardOption">Standard (150mm - 250mm) with 4S battery and around 3" to 5" propellers</label>
        </div>
        <div class="option">
          <input type="radio" name="droneSize" value="longRange" id="longRangeOption">
          <label for="longRangeOption">Long-range (250mm or larger) with 6S/7S battery and around 5" to 7" propellers</label>
        </div>
        <div class="option">
          <input type="radio" name="droneSize" value="newToSizes" id="newToSizesOption">
          <label for="newToSizesOption">I'm new to these terms and sizes and want more information</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn8_1" disabled>Next</button>
      </div>
    </div>

    <!-- Question 9.1: drone regulations and safety guidelines -->
    <div class="question" id="question9_1"  style="display: none;">
      <h2>Are you familiar with the drone regulations and safety guidelines in your local area?</h2>
      <div class="options">
        <div class="option">
          <input type="radio" name="regulationsKnowledge" value="well_informed" id="wellInformedOption">
          <label for="wellInformedOption">Yes, I am well-informed about the drone regulations, safety guidelines, and licensing requirements in my location.</label>
        </div>
        <div class="option">
          <input type="radio" name="regulationsKnowledge" value="basic_knowledge" id="basicKnowledgeOption">
          <label for="basicKnowledgeOption">I have some basic knowledge of regulations, but I would appreciate more information, including licensing details.</label>
        </div>
        <div class="option">
          <input type="radio" name="regulationsKnowledge" value="not_informed" id="notInformedOption">
          <label for="notInformedOption">No, I haven't looked into the regulations or licensing requirements yet.</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn9_1" disabled>Next</button>
      </div>
    </div>

    <!-- Information Box: drone regulations and safety guidelines for if user shooce basic_knowledge -->
    <div class="info-box" id="droneregulationsbasicknowledgeInfoBox" style="display: none;">
      <h2>Drone Regulations and Safety Guidelines</h2>
      <p>If you haven't looked into drone regulations and licensing requirements in your area yet, it's important to do so before flying your drone. Different regions and countries have varying rules and regulations that you must follow to ensure safe and legal drone operation.</p>
      <p>Some key points to consider:</p>
      <ul>
        <li>Check if you need to register your drone with aviation authorities.</li>
        <li>Understand where and when you're allowed to fly your drone.</li>
        <li>Learn about no-fly zones, restricted areas, and privacy concerns.</li>
        <li>Find out about any required training or certification for drone pilots.</li>
      </ul>
      <p>By familiarizing yourself with the regulations and guidelines, you can enjoy flying your drone responsibly and avoid any potential legal issues.</p>
      <div class="btn-container">
        <button id="nextBtndroneregulationsbasicknowledgeInfo">Next</button>
      </div>
    </div>

    <!-- Information Box: drone regulations and safety guidelines for if user shooce not_informed -->
    <div class="info-box" id="droneregulationsnotinformedInfoBox" style="display: none;">
      <h2>Drone Regulations and Safety Guidelines</h2>
      <p>If you're not familiar with the drone regulations and safety guidelines in your local area, it's important to learn about them before flying a drone. Different countries and regions have their own rules and regulations governing drone flights, which can include altitude limits, no-fly zones, and licensing requirements.</p>
      <p>Before you start flying your drone, consider doing the following:</p>
      <ul>
        <li>Research the regulations and guidelines specific to your location.</li>
        <li>Check for any restricted or no-fly zones in your area.</li>
        <li>Understand the maximum allowed altitude for drone flights.</li>
        <li>Learn about privacy and data protection laws related to drone flights.</li>
        <li>Consider taking a drone safety course or obtaining any required licenses or certifications.</li>
      </ul>
      <p>Being informed about the regulations and safety guidelines will help you enjoy your drone flying experience responsibly and avoid any legal issues or safety risks.</p>
      <div class="btn-container">
        <button id="nextBtndroneregulationsnotinformedInfo">Next</button>
      </div>
    </div>

    <!-- Question 10.1: Preferred FPV Drone Features -->
    <div class="question" id="question10_1" style="display: none;">
      <h2>After considering your experience level, goals, and budget, do you have any specific features or functionalities that you'd like to prioritize in an FPV drone?</h2>
      <div class="options">
        <div class="option">
          <input type="checkbox" name="featurePreference" value="flightTime" id="flightTimeOption">
          <label for="flightTimeOption">I'd like longer flight time for extended flying sessions.</label>
        </div>
        <div class="option">
          <input type="checkbox" name="featurePreference" value="hdVideo" id="hdVideoOption">
          <label for="hdVideoOption">High-definition video recording is a priority for capturing quality footage.</label>
        </div>
        <div class="option">
          <input type="checkbox" name="featurePreference" value="maintenance" id="maintenanceOption">
          <label for="maintenanceOption">Ease of maintenance and repairability for long-term use.</label>
        </div>
        <div class="option">
          <input type="checkbox" name="featurePreference" value="durability" id="durabilityOption">
          <label for="durabilityOption">I want a durable and crash-resistant design to withstand tough flights.</label>
        </div>
        <div class="option">
          <input type="checkbox" name="featurePreference" value="gps" id="gpsOption">
          <label for="gpsOption">I'm interested in GPS functionality for features like speed feedback and failsafe rescue.</label>
        </div>
        <div class="option">
          <input type="checkbox" name="featurePreference" value="compatibility" id="compatibilityOption">
          <label for="compatibilityOption">Compatibility with various FPV goggles and equipment.</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn10_1" disabled>Next</button>
      </div>
    </div>



    <!-- Question 1.2: Camera Drone -->
    <div class="question" id="question1_2" style="display: none;">
      <h2>If the user chooses "a. A camera drone for photography and videography":</h2>
      <h3>What's your primary use for the camera drone?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="cameraUse" value="personal" id="personalOption">
          <label for="personalOption">Aerial photography for personal/family use</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraUse" value="professional" id="professionalOption">
          <label for="professionalOption">Professional photography/videography for events or clients</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraUse" value="mapping" id="mappingOption">
          <label for="mappingOption">Aerial surveying or mapping for work purposes</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn1_2" disabled>Next</button>
      </div>
    </div>

    <!-- Question 2_2: Camera Drone - Experience Level -->
    <div class="question" id="question2_2" style="display: none;">
      <h2>If the user chooses "Aerial photography for personal/family use" or “Professional photography/videography for events or clients”:</h2>
      <h3>What's your level of experience with drone flying?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="droneExperience" value="beginner" id="beginnerExperience">
          <label for="beginnerExperience">I'm a beginner and need an easy-to-fly drone</label>
        </div>
        <div class="option">
          <input type="radio" name="droneExperience" value="intermediate" id="intermediateExperience">
          <label for="intermediateExperience">I have some experience and want a drone with more advanced features</label>
        </div>
        <div class="option">
          <input type="radio" name="droneExperience" value="advanced" id="advancedExperience">
          <label for="advancedExperience">I'm an experienced pilot and seek a high-performance drone for specialized flying</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn2_2" disabled>Next</button>
      </div>
    </div>

    <!-- Question 3_2: Camera Drone - Camera Quality -->
    <div class="question" id="question3_2" style="display: none;">
      <h2>Users answer will be saved and used later and user will continue to next question:</h2>
      <h3>What level of camera quality and features are you looking for?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="cameraQuality" value="highResolution" id="highResolutionQuality">
          <label for="highResolutionQuality">High-resolution camera with 4K/6K video capability</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraQuality" value="interchangeableLenses" id="interchangeableLensesQuality">
          <label for="interchangeableLensesQuality">Interchangeable lenses for versatility</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraQuality" value="proFeatures" id="proFeaturesQuality">
          <label for="proFeaturesQuality">Pro-level features like RAW image capture, multiple codecs, and Log profiles</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraQuality" value="notSure" id="notSureQuality">
          <label for="notSureQuality">I'm not sure yet or doesn't really matter</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn3_2" disabled>Next</button>
      </div>
    </div>

    <!-- Question 4_2: Camera Drone - Flight Automation -->
    <div class="question" id="question4_2" style="display: none;">
      <h2>Users answer will be saved and used later and user will continue to next question:</h2>
      <h3>What level of flight automation do you prefer?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="flightAutomation" value="basicModes" id="basicModesAutomation">
          <label for="basicModesAutomation">Basic flight modes (auto-takeoff, auto-landing, and GPS-based positioning)</label>
        </div>
        <div class="option">
          <input type="radio" name="flightAutomation" value="advancedModes" id="advancedModesAutomation">
          <label for="advancedModesAutomation">Advanced intelligent flight modes (subject tracking, waypoints, etc.)</label>
        </div>
        <div class="option">
          <input type="radio" name="flightAutomation" value="notSure" id="notSureAutomation">
          <label for="notSureAutomation">I'm not sure yet</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn4_2" disabled>Next</button>
      </div>
    </div>

    <!-- Question 5_2: Camera Drone - Data Collection Capabilities -->
    <div class="question" id="question5_2" style="display: none;">
      <h2>If the user chooses "Aerial surveying or mapping for work purposes":</h2>
      <h3>What kind of data collection capabilities are you looking for?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="dataCapabilities" value="highResolution" id="highResolutionData">
          <label for="highResolutionData">High-resolution imagery for detailed mapping</label>
        </div>
        <div class="option">
          <input type="radio" name="dataCapabilities" value="thermalImaging" id="thermalImagingData">
          <label for="thermalImagingData">Thermal imaging for inspection and analysis</label>
        </div>
        <div class="option">
          <input type="radio" name="dataCapabilities" value="lidarMultispectral" id="lidarMultispectralData">
          <label for="lidarMultispectralData">Lidar or multispectral capabilities for specialized applications</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn5_2" disabled>Next</button>
      </div>
    </div>

    <!-- Question 6_2: Camera Drone - Budget Range -->
    <div class="question" id="question6_2" style="display: none;">
      <h2>Users answer will be saved and used later and user will continue to next question where it will show the best options for his previous answers:</h2>
      <h3>What is your budget range for the camera drone and necessary accessories?</h3>
      <div class="options">
        <div class="option">
          <input type="radio" name="cameraBudget" value="under400" id="under400Budget">
          <label for="under400Budget">Under $400</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraBudget" value="400-800" id="400-800Budget">
          <label for="400-800Budget">$400 - $800</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraBudget" value="800-1200" id="800-1200Budget">
          <label for="800-1200Budget">$800 - $1200</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraBudget" value="1200-1500" id="1200-1500Budget">
          <label for="1200-1500Budget">$1200 - $1500</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraBudget" value="1500-2000" id="1500-2000Budget">
          <label for="1500-2000Budget">$1500 - $2000</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraBudget" value="2000-3000" id="2000-3000Budget">
          <label for="2000-3000Budget">$2000 - $3000</label>
        </div>
        <div class="option">
          <input type="radio" name="cameraBudget" value="3000plus" id="3000plusBudget">
          <label for="3000plusBudget">$3000+</label>
        </div>
      </div>
      <div class="btn-container">
        <button id="nextBtn6_2" disabled>Next</button>
      </div>
    </div>
    
    <!-- Add more question divs here -->
  
  </div>
  
  <script>
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

    const nextBtn1_1 = document.getElementById('nextBtn1_1');
    const droneTypeOptions = document.getElementsByName('droneType');
    const nextBtn2_1 = document.getElementById('nextBtn2_1');
    const fpvExperienceOptions = document.getElementsByName('fpvExperience');
    const simulatorInfoBox = document.getElementById("simulatorInfoBox");
    const nextBtnSimulatorInfo = document.getElementById("nextBtnSimulatorInfo");
    const simulatorExperience = document.getElementsByName('simulatorExperience');
    const nextBtn3_1 = document.getElementById('nextBtn3_1');
    const diyInterest = document.getElementsByName('diyInterest');
    const nextBtn4_1 = document.getElementById('nextBtn4_1');
    const primaryGoal = document.getElementsByName('primaryGoal');
    const nextBtn5_1 = document.getElementById('nextBtn5_1');
    const components = document.getElementsByName('components[]');
    const nextBtn6_1 = document.getElementById('nextBtn6_1');
    const budgetRange = document.getElementsByName('budgetRange');
    const nextBtn7_1 = document.getElementById('nextBtn7_1');
    const fpvSystem = document.getElementsByName('fpvSystem');
    const nextBtn8_1 = document.getElementById('nextBtn8_1');
    const droneSize = document.getElementsByName('droneSize');
    const nextBtn9_1 = document.getElementById('nextBtn9_1');
    const droneregulationsbasicknowledgeInfoBox = document.getElementById("droneregulationsbasicknowledgeInfoBox");
    const nextBtndroneregulationsnotinformedInfo = document.getElementById("nextBtndroneregulationsnotinformedInfo");
    const droneregulationsnotinformedInfoBox = document.getElementById("droneregulationsnotinformedInfoBox");
    const nextBtndroneregulationsbasicknowledgeInfo = document.getElementById("nextBtndroneregulationsbasicknowledgeInfo");
    const regulationsKnowledge = document.getElementsByName('regulationsKnowledge');
    const nextBtn10_1 = document.getElementById('nextBtn10_1');
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
    handleCheckboxChange(components, nextBtn5_1);
    handleOptionChange(budgetRange, nextBtn6_1);
    handleOptionChange(fpvSystem, nextBtn7_1);
    handleOptionChange(droneSize, nextBtn8_1);
    handleOptionChange(regulationsKnowledge, nextBtn9_1);
    handleCheckboxChange(featurePreference, nextBtn10_1);

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
      const containerDiv = document.getElementById('questioning_container');

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
      let selectedcomponents;
      for (const option of components) {
        if (option.checked) {
          selectedcomponents = option.value;
          break;
        }
      }

      if (selectedcomponents) {
        userChoices['components'] = selectedcomponents;

        showQuestions('question6_1');
      }
    });


    nextBtn6_1.addEventListener('click', () => {
      let selectedbudgetRange;
      for (const option of budgetRange) {
        if (option.checked) {
          selectedbudgetRange = option.value;
          break;
        }
      }

      if (selectedbudgetRange) {
        userChoices['budgetRange'] = selectedbudgetRange;

        if (selectedbudgetRange === 'under400' || selectedbudgetRange === '400-600' || selectedbudgetRange === '600-800') {
          showQuestions('question8_1');
        } else if (selectedbudgetRange === '800-1000' || selectedbudgetRange === '1000-1500' || selectedbudgetRange === '1500-2000' || selectedbudgetRange === '2000+') {
          showQuestions('question7_1');
        }
      }
    });

    nextBtn7_1.addEventListener('click', () => {
      let selectedfpvSystem;
      for (const option of fpvSystem) {
        if (option.checked) {
          selectedfpvSystem = option.value;
          break;
        }
      }

      if (selectedfpvSystem) {
        userChoices['fpvSystem'] = selectedfpvSystem;

        showQuestions('question8_1');
      }
    });

    nextBtn8_1.addEventListener('click', () => {
      let selecteddroneSize;
      for (const option of droneSize) {
        if (option.checked) {
          selecteddroneSize = option.value;
          break;
        }
      }

      if (selecteddroneSize) {
        userChoices['droneSize'] = selecteddroneSize;

        showQuestions('question9_1');
      }
    });
    
    nextBtn9_1.addEventListener('click', () => {
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
          showQuestions('question10_1');
        } else if (selectedregulationsKnowledge === 'basic_knowledge') {
          showInfo('droneregulationsbasicknowledgeInfoBox', nextBtn9_1);
        } else if (selectedregulationsKnowledge === 'not_informed') {
          showInfo('droneregulationsnotinformedInfoBox', nextBtn9_1);
        }
      }
    });

    nextBtndroneregulationsbasicknowledgeInfo.addEventListener('click', () => {
      const question9_1Div = document.getElementById('question9_1');
      const question10_1Div = document.getElementById('question10_1');
      const droneregulationsbasicknowledgeInfoBoxDiv = document.getElementById('droneregulationsbasicknowledgeInfoBox');

      if (question9_1Div && question10_1Div && droneregulationsbasicknowledgeInfoBoxDiv) {
        question9_1Div.style.display = 'none';
        question10_1Div.style.display = 'block';
        droneregulationsbasicknowledgeInfoBoxDiv.style.display = 'none';
      }
    });

    nextBtndroneregulationsnotinformedInfo.addEventListener('click', () => {
      const question9_1Div = document.getElementById('question8_1');
      const question10_1Div = document.getElementById('question9_1');
      const droneregulationsnotinformedInfoBoxDiv = document.getElementById('droneregulationsnotinformedInfoBox');

      if (question9_1Div && question10_1Div && droneregulationsnotinformedInfoBoxDiv) {
        question9_1Div.style.display = 'none';
        question10_1Div.style.display = 'block';
        droneregulationsnotinformedInfoBoxDiv.style.display = 'none';
      }
    });
    
    nextBtn10_1.addEventListener('click', () => {
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

        showResults('droneCards', 'question10_1');
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
        userChoices['cameraUse'] = selectedcameraUse;

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
  </script>