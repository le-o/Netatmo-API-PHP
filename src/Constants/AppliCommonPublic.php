<?php
/**
* Wrapper ensuring backward compatibility with older SDK versions
*
* DEPRECATED
*
* You must not use this class
*
*/

require_once dirname(dirname(__FILE__)) . "/Netatmo/autoload.php";

class NAScopes extends leo\Netatmo\Common\NAScopes
{
}

class NAThermZone extends leo\Netatmo\Common\NAThermZone
{
}

class NACameraInfo extends leo\Netatmo\Common\NACameraInfo
{
}

class NACameraHomeInfo extends leo\Netatmo\Common\NACameraHomeInfo
{
}

class NACameraEventInfo extends leo\Netatmo\Common\NACameraEventInfo
{
}

class NACameraEventType extends leo\Netatmo\Common\NACameraEventType
{
}

class NACameraPersonInfo extends leo\Netatmo\Common\NACameraPersonInfo
{
}

class NACameraImageInfo extends leo\Netatmo\Common\NACameraImageInfo
{
}

class NACameraStatus extends leo\Netatmo\Common\NACameraStatus
{
}

class NACameraSDEvent extends leo\Netatmo\Common\NACameraSDEvent
{
}

class NACameraAlimSubStatus extends leo\Netatmo\Common\NACameraAlimSubStatus
{
}

class NACameraVideoStatus extends leo\Netatmo\Common\NACameraVideoStatus
{
}

class NAWifiRssiThreshold extends leo\Netatmo\Common\NAWifiRssiThreshold
{
}

class NARadioRssiTreshold extends leo\Netatmo\Common\NARadioRssiTreshold
{
}

class NAStationSensorsMinMax extends leo\Netatmo\Common\NAStationSensorsMinMax
{
}

class NARestErrorCode extends leo\Netatmo\Common\NARestErrorCode
{
}

class NABatteryLevelModule extends leo\Netatmo\Common\NABatteryLevelModule
{
}

class NABatteryLevelIndoorModule extends leo\Netatmo\Common\NABatteryLevelIndoorModule
{
}

class NABatteryLevelWindGaugeModule extends leo\Netatmo\Common\NABatteryLevelWindGaugeModule
{
}

class NABatteryLevelThermostat extends leo\Netatmo\Common\NABatteryLevelThermostat
{
}

?>
