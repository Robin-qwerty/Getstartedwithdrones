## The questining system

### HTML side for questions and options
```html
<!-- question div example -->
<div class="question" id="question0_0">
    <h2>[question here]?</h2>
    <div class="options">
        <!-- option example -->
        <div class="option">
            <input type="radio" name="droneType" value="camera" id="cameraOption">
            <label for="cameraOption">[option here]</label>
            <!-- option info example -->
            <div class="arrow">▼</div>
            <div class="info-container">
                <div class="additional-info">[Additional information about option here]</div>
            </div>
    	</div>
    </div>
    <!-- question next button -->
    <div class="btn-container">
    	<button id="nextBtn0_0" disabled>Next</button>
    </div>
</div>
```

- The `0_0` in the div question id and the button id is the question id.

<hr>

## Question id's and all option values

<b>Question [questionid]: [value name] - [value for option 1]/[value for option 2] etc</b>

- Guestion 0: droneType - camera/fpv/unsure

<b>If user chooses value 'fpv' at question 0:</b>

- <b>Question 1_1: </b>fpvExperience - beginner/intermediate/advanced
- <b>Question 1_2: </b>simulatorExperience - yes/no
- <b>Question 1_3: </b>diyInterest - yes/no
- <b>Question 1_4: </b>primaryGoal - scenicViews/freestyle/racing/cinematic
<!-- - <b>Question 1_5: </b> -->
- <b>Question 1_6: </b>budgetRange - under400/400-600/600-800/800-1000/1000-1500/1500-2000/2000+
- <b>Question 1_7: </b>fpvSystem - digital/analog
- <b>Question 1_8: </b>droneSize - tinyWhoop/micro/standard/longRange/newToSizes
- <b>Question 1_9: </b>regulationsKnowledge - well_informed/basic_knowledge/not_informed
- <b>Question 1_10: </b>featurePreference - flightTime/hdVideo/maintenance/durability/gps/compatibility

<b>Example of array you can get when user answers all questions:</b>
```json
{
  "droneType": "fpv",
  "fpvExperience": "intermediate",
  "diyInterest": "no",
  "primaryGoal": "freestyle",
  "budgetRange": "1000-1500",
  "fpvSystem": "analog",
  "droneSize": "standard",
  "regulationsKnowledge": "well_informed",
  "featurePreference": [
    "durability",
    "gps"
  ]
}
```

<hr>

<b>If user chooses value 'camera' at question 0:</b>

- <b>Question 2_1: </b>
- <b>Question 2_2: </b>
- <b>Question 2_3: </b>