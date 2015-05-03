<?php
echo <<<EOL
<!-- Main -->
<core-header-panel class="blue" main flex>

    <!-- Main Toolbar -->
    <core-toolbar>
        <span>{{appName}}</span>
    </core-toolbar>

    <div layout horizontal center-justified>
        <div class="hero-unit" vertical>
            <template repeat="{{location in locations}}">
                <snow-location
                    name="{{location.name}}"
                    webcamLink="{{location.webcam}}"
                    weatherNow="{{location.weatherNow}}"
                    weather3Days="{{location.weather3Days}}"
                    >
                </snow-location>
            </template>
        </div>
    </div>
</core-header-panel>
EOL;
