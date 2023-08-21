## questining system

### html side for questions and options
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
            <div class="additional-info">[Additional information about option here]</div>
    	</div>
    </div>
    <!-- question next button -->
    <div class="btn-container">
    	<button id="nextBtn0_0" disabled>Next</button>
    </div>
</div>
```