<?
class MoehlenhoffAlpha2 extends IPSModule
{

	private static $base = Array(
		"ID" => Array("Name" => "Basis ID", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 00),
        "TYPE" => Array("Name" => "Basis Type", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 50),
        "NAME" => Array("Name" => "Basis Name", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 50),
        "ORIGIN" => Array("Name" => "Basis Origin", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 51),
        "ERRORCOUNT" => Array("Name" => "Basis Error Count", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 50),
        "DATETIME" => Array("Name" => "Basis Date Time", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 50),
        "DAYOFWEEK" => Array("Name" => "Basis Day of Week", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 50),
        "TIMEZONE" => Array("Name" => "Basis Timezone", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 50),
        "NTPTIMESYNC" => Array("Name" => "Basis NTP Synchroinze", "Type" => 0, "Profile" => "", "Action" => false, "Position" => 50),
        //ErrorCode
		"VERS_SW_STM" => Array("Name" => "Basis SW STM Version", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 50),
		"VERS_SW_ETH" => Array("Name" => "Basis SW ETH Version", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 50),
		"VERS_HW" => Array("Name" => "Basis HW Version", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 50),
		"TEMPERATUREUNIT" => Array("Name" => "Basis Temperatureinheit", "Type" => 1, "Profile" => "MH.TemperatureUnit", "Action" => true, "Position" => 50),
		"SUMMERWINTER" => Array("Name" => "Basis Automatische Zeitumstellung", "Type" => 0, "Profile" => "MH.SummerWinter", "Action" => true, "Position" => 50),
		"TPS" => Array("Name" => "Basis Taupunktsensor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 50),
		"LIMITER" => Array("Name" => "Basis Temperaturbegrenzer", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 50),
        "MASTERID" => Array("Name" => "Basis Master ID", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 50),
		"CHANGEOVER" => Array("Name" => "Basis Betriebsart Heizen/Kühlen (CO-Eingang)", "Type" => 0, "Profile" => "MH.ChangeOver", "Action" => false, "Position" => 50),
        "COOLING" => Array("Name" => "Basis Kühlen-Modus", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 50),
		"MODE" => Array("Name" => "Basis Rang im Systemverbund", "Type" => 1, "Profile" => "MH.Mode", "Action" => false, "Position" => 50),
        "OPERATIONMODE_ACTOR" => Array("Name" => "Basis OPERATIONMODE_ACTOR", "Type" => 1, "Profile" => "MH.Mode", "Action" => false, "Position" => 50),
        "ANTIFREEZE" => Array("Name" => "Basis Frostschutz", "Type" => 0, "Profile" => "~Switch", "Action" => true, "Position" => 50),
        "ANTIFREEZE_TEMP" => Array("Name" => "Basis Frostschutz Temperatur", "Type" => 1, "Profile" => "MH.AntifreezeTemp", "Action" => true, "Position" => 50),
		"FIRSTOPEN_TIME" => Array("Name" => "Basis FIRSTOPEN_TIME", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50),
        "SMARTSTART" => Array("Name" => "Basis Smartstart ein/aus", "Type" => 0, "Profile" => "~Switch", "Action" => true, "Position" => 50),
		"ECO_DIFF" => Array("Name" => "Basis Absenkdifferenztemperatur", "Type" => 2, "Profile" => "MH.EcoDiff", "Action" => true, "Position" => 50),
        "ECO_INPUTMODE" => Array("Name" => "Basis Absenkeingang", "Type" => 0, "Profile" => "", "Action" => false, "Position" => 50),
        "ECO_INPUT_STATE" => Array("Name" => "Basis Absenkeingang", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 50),
		"T_HEAT_VACATION" => Array("Name" => "Basis Urlaub Temperatur Heizen", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 50),
        // Urlaubs Settings
        "VACATION/VACATION_STATE" => Array("Name" => "Urlaub Status", "Type" => 1, "Profile" => "MH.VacationState", "Action" => true, "Position" => 50, "Keep" => "ShowVacation"),
        "VACATION/START_DATE" => Array("Name" => "Urlaub Start Datum", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 13, "Keep" => "ShowVacation"),
        "VACATION/START_TIME" => Array("Name" => "Urlaub Start Zeit", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 12, "Keep" => "ShowVacation"),
        "VACATION/END_DATE" => Array("Name" => "Urlaub End Datum", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 10, "Keep" => "ShowVacation"),
        "VACATION/END_TIME" => Array("Name" => "Urlaub End Zeit", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 10, "Keep" => "ShowVacation"),
        // Network Settings
        "NETWORK/MAC" => Array("Name" => "Network Mac Address", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/DHCP" => Array("Name" => "Network DHCP enabled", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/IPV6ACTIVE" => Array("Name" => "Network IP6 active", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/IPV4ACTUAL" => Array("Name" => "Network IP4 active Address", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/IPV4SET" => Array("Name" => "Network IP4 Address", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/IPV6ACTUAL" => Array("Name" => "Network IP6 active Address", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/IPV6SET" => Array("Name" => "Network IP6 Address", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/NETMASKACTUAL" => Array("Name" => "Network active Netmask", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/NETMASKSET" => Array("Name" => "Network Netmask", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/DNS" => Array("Name" => "Network DNS Server", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowNetwork"),
        "NETWORK/GATEWAY" => Array("Name" => "Network Gateway", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowNetwork"),
		//Cloud
        "CLOUD/USERID" => Array("Name" => "Cloud User ID", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 80, "Keep" => "ShowCloud"),
        "CLOUD/PASSWORD" => Array("Name" => "Cloud Password", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 80, "Keep" => "ShowCloud"),
        "CLOUD/M2MSERVERPORT" => Array("Name" => "Cloud M2M Server Port", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowCloud"),
        "CLOUD/M2MLOCALPORT" => Array("Name" => "Cloud M2M local Port", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowCloud"),
        "CLOUD/M2MHTTPPORT" => Array("Name" => "Cloud M2M HTTP Port", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowCloud"),
        "CLOUD/M2MHTTPSPORT" => Array("Name" => "Cloud M2m HTTPs Port", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowCloud"),
        "CLOUD/M2MSERVERADDRESS" => Array("Name" => "Cloud M2M Server Address", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowCloud"),
        "CLOUD/M2MACTIVE" => Array("Name" => "Cloud M2M active", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowCloud"),
        "CLOUD/M2MSTATE" => Array("Name" => "Cloud M2M state", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 60, "Keep" => "ShowCloud"),
        // KWLCTRL
        "KWLCTRL/KWL_CONTROL_VISIBLE" => Array("Name" => "Basis KWL Control Visible", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowKWLCTRL"),
        "KWLCTRL/KWL_PRESENT" => Array("Name" => "Basis KWL Present", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowKWLCTRL"),
        "KWLCTRL/KWL_CONNECTION" => Array("Name" => "Basis KWL Connection", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowKWLCTRL"),
        "KWLCTRL/KWL_URL" => Array("Name" => "Basis KWL Url", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowKWLCTRL"),
        "KWLCTRL/KWL_PORT" => Array("Name" => "Basis KWL Port", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowKWLCTRL"),
        "KWLCTRL/KWL_STATUS" => Array("Name" => "Basis KWL Status", "Type" => 0, "Profile" => "", "Action" => false, "Position" => 60, "Keep" => "ShowKWLCTRL"),
        "KWLCTRL/KWL_FLOWCTRL" => Array("Name" => "Basis KWL Flow Control", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowKWLCTRL"),
		// ExpertCode
        "CODE/EXPERT" => Array("Name" => "Expert Code", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowCode"),
        // Programm
        "PROGRAM/SHIFT_PROGRAM[@nr='1'][@shiftingtime='1']/START" => Array("Name" => "Program 1 Start Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='1'][@shiftingtime='1']/END" => Array("Name" => "Program 1 End Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='2'][@shiftingtime='1']/START" => Array("Name" => "Program 2-1 Start Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='2'][@shiftingtime='1']/END" => Array("Name" => "Program 2-1 End Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='2'][@shiftingtime='2']/START" => Array("Name" => "Program 2-2 Start Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='2'][@shiftingtime='2']/END" => Array("Name" => "Program 2-2 End Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='3'][@shiftingtime='1']/START" => Array("Name" => "Program 3-1 Start Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='3'][@shiftingtime='1']/END" => Array("Name" => "Program 3-1 End Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='3'][@shiftingtime='2']/START" => Array("Name" => "Program 3-2 Start Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='3'][@shiftingtime='2']/END" => Array("Name" => "Program 3-2 End Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='4'][@shiftingtime='1']/START" => Array("Name" => "Program 4 Start Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
        "PROGRAM/SHIFT_PROGRAM[@nr='4'][@shiftingtime='1']/END" => Array("Name" => "Program 4 End Time", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 60, "Keep" => "ShowProgramm"),
		// PUMP_OUTPUT
        "PUMP_OUTPUT/LOCALGLOBAL" => Array("Name" => "Pump local or global", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowPumpOutput"),
        "PUMP_OUTPUT/PUMP_OUTPUT_TYPE" => Array("Name" => "Pump Output Type", "Type" => 0, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowPumpOutput"),
        "PUMP_OUTPUT/PUMP_LEADTIME" => Array("Name" => "Pump lead Time (Minute)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true, "Position" => 50, "Keep" => "ShowPumpOutput"),
		"PUMP_OUTPUT/PUMP_STOPPINGTIME" => Array("Name" => "Pump stopping Time (Minute)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true, "Position" => 50, "Keep" => "ShowPumpOutput"),
        "PUMP_OUTPUT/PUMP_OPERATIONMODE" => Array("Name" => "Pump Operation Mode", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowPumpOutput"),
        "PUMP_OUTPUT/MINRUNTIME" => Array("Name" => "Pump minimum Runtime (Minute)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true, "Position" => 50, "Keep" => "ShowPumpOutput"),
        "PUMP_OUTPUT/MINSTANDSTILL" => Array("Name" => "Pump minimum Standbytime (Minute)", "Type" => 1, "Profile" => "MH.PumpTime", "Action" => true, "Position" => 50, "Keep" => "ShowPumpOutput"),
        // RELAIS
        "RELAIS/FUNCTION" => Array("Name" => "Relais Function", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowRelais"),
		"RELAIS/RELAIS_LEADTIME" => Array("Name" => "Relais lead Time (Minute)", "Type" => 1, "Profile" => "MH.RelaisTime", "Action" => true, "Position" => 50, "Keep" => "ShowRelais"),
		"RELAIS/RELAIS_STOPPINGTIME" => Array("Name" => "Relais stopping Time (Minute)", "Type" => 1, "Profile" => "MH.RelaisTime", "Action" => true, "Position" => 50, "Keep" => "ShowRelais"),
        "RELAIS/RELAIS_OPERATIONMODE" => Array("Name" => "Relais Operation Mode", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowRelais"),
        // CHANGEOVER_FUNC
        "CHANGEOVER_FUNC/CHANGEOVER_FUNC_MODE" => Array("Name" => "Change over Function Mode", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowChangeOverFunc"),
        // EMERGENCYMODE
		"EMERGENCYMODE/EMERGENCYMODE_TIME" => Array("Name" => "Notbetrieb Aktivierungszeit (Minuten)", "Type" => 1, "Profile" => "MH.EmergencyTime", "Action" => true, "Position" => 50, "Keep" => "ShowEmergencyMode"),
		"EMERGENCYMODE/PWMCYCLE" => Array("Name" => "Notbetrieb PWM-Zyklusdauer (Minuten)", "Type" => 1, "Profile" => "MH.PWMCycle", "Action" => true, "Position" => 50, "Keep" => "ShowEmergencyMode"),
		"EMERGENCYMODE/PWMHEAT" => Array("Name" => "Notbetrieb PWM Heizendauer (Prozent)", "Type" => 1, "Profile" => "MH.PWMPercent", "Action" => true, "Position" => 50, "Keep" => "ShowEmergencyMode"),
		"EMERGENCYMODE/PWMCOOL" => Array("Name" => "Notbetrieb PWM Kühlendauer (Prozent)", "Type" => 1, "Profile" => "MH.PWMPercent", "Action" => true, "Position" => 50, "Keep" => "ShowEmergencyMode"),
		// VALVEPROTECT
		"VALVEPROTECT/VALVEPROTECT_TIME" => Array("Name" => "Valve Protected Time (Minute)", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowValveProtect"),
        "VALVEPROTECT/DURATION" => Array("Name" => "Valve Protected Duration (Minute)", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowValveProtect"),
        // PUMPPROTECT
        "PUMPPROTECT/PUMPPROTECT_TIME" => Array("Name" => "Pump Protected Time (Minute)", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowPumpProtect"),
        "PUMPPROTECT/DURATION" => Array("Name" => "Pump Protected Duration (Minute)", "Type" => 1, "Profile" => "", "Action" => true, "Position" => 50, "Keep" => "ShowPumpProtect")
    );

	private static $values = Array(
        "HEATAREA[@nr='%d']/HEATAREA_NAME" => Array("Name" => "Heizzone %'.02d Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/HEATAREA_MODE" => Array("Name" => "Heizzone %'.02d Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 62, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_ACTUAL" => Array("Name" => "Heizzone %'.02d Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 60, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_ACTUAL_EXT" => Array("Name" => "Heizzone %'.02d Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 63, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_TARGET" => Array("Name" => "Heizzone %'.02d Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 61, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/HEATAREA_STATE" => Array("Name" => "Heizzone %'.02d Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/PRESENCE" => Array("Name" => "Heizzone %'.02d Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_TARGET_MIN" => Array("Name" => "Heizzone %'.02d Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_TARGET_MAX" => Array("Name" => "Heizzone %'.02d Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/OFFSET" => Array("Name" => "Heizzone %'.02d Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_HEAT_DAY" => Array("Name" => "Heizzone %'.02d Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_HEAT_NIGHT" => Array("Name" => "Heizzone %'.02d Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
        "HEATAREA[@nr='%d']/BLOCK_HC" => Array("Name" => "Heizzone %'.02d Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02d"),
        // Lüftermotor
        "HEATAREA[@nr='%d']/RPM_MOTOR" => Array("Name" => "Heizzone %'.02d Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dMotor"),
        // Kühlen
		"HEATAREA[@nr='%d']/T_COOL_DAY" => Array("Name" => "Heizzone %'.02d Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dCooling"),
		"HEATAREA[@nr='%d']/T_COOL_NIGHT" => Array("Name" => "Heizzone %'.02d Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dCooling"),
		// Boden Temperatur
        "HEATAREA[@nr='%d']/T_FLOOR_DAY" => Array("Name" => "Heizzone %'.02d Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dFloorTemp"),
		// Heizsystem
        "HEATAREA[@nr='%d']/HEATINGSYSTEM" => Array("Name" => "Heizzone %'.02d Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dSystem"),
		// Programm
		"HEATAREA[@nr='%d']/PROGRAM_WEEK" => Array("Name" => "Heizzone %'.02d Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dProgram"),
		"HEATAREA[@nr='%d']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone %'.02d Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dProgram"),
        // Party
		"HEATAREA[@nr='%d']/PARTY" => Array("Name" => "Heizzone %'.02d Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea%'.02dParty"),
		"HEATAREA[@nr='%d']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone %'.02d Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea%'.02dParty")
    );
	private static $Oldvalues = Array(

		"HEATAREA[@nr='2']/HEATAREA_NAME" => Array("Name" => "Heizzone 02 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/HEATAREA_MODE" => Array("Name" => "Heizzone 02 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 72, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/T_ACTUAL" => Array("Name" => "Heizzone 02 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 70, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 02 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 73, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/T_TARGET" => Array("Name" => "Heizzone 02 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 71, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/HEATAREA_STATE" => Array("Name" => "Heizzone 02 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/PRESENCE" => Array("Name" => "Heizzone 02 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/T_TARGET_MIN" => Array("Name" => "Heizzone 02 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/T_TARGET_MAX" => Array("Name" => "Heizzone 02 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		//"HEATAREA[@nr='2']/RPM_MOTOR" => Array("Name" => "Heizzone 02 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/OFFSET" => Array("Name" => "Heizzone 02 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		//"HEATAREA[@nr='2']/T_HEAT_DAY" => Array("Name" => "Heizzone 02 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		//"HEATAREA[@nr='2']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 02 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		//"HEATAREA[@nr='2']/T_COOL_DAY" => Array("Name" => "Heizzone 02 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		//"HEATAREA[@nr='2']/T_COOL_NIGHT" => Array("Name" => "Heizzone 02 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		//"HEATAREA[@nr='2']/T_FLOOR_DAY" => Array("Name" => "Heizzone 02 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/HEATINGSYSTEM" => Array("Name" => "Heizzone 02 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		//"HEATAREA[@nr='2']/BLOCK_HC" => Array("Name" => "Heizzone 02 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/PROGRAM_WEEK" => Array("Name" => "Heizzone 02 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 02 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/PARTY" => Array("Name" => "Heizzone 02 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='2']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 02 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea02"),
		"HEATAREA[@nr='3']/HEATAREA_NAME" => Array("Name" => "Heizzone 03 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/HEATAREA_MODE" => Array("Name" => "Heizzone 03 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 82, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/T_ACTUAL" => Array("Name" => "Heizzone 03 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 80, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 03 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 83, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/T_TARGET" => Array("Name" => "Heizzone 03 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 81, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/HEATAREA_STATE" => Array("Name" => "Heizzone 03 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/PRESENCE" => Array("Name" => "Heizzone 03 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/T_TARGET_MIN" => Array("Name" => "Heizzone 03 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/T_TARGET_MAX" => Array("Name" => "Heizzone 03 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		//"HEATAREA[@nr='3']/RPM_MOTOR" => Array("Name" => "Heizzone 03 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/OFFSET" => Array("Name" => "Heizzone 03 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		//"HEATAREA[@nr='3']/T_HEAT_DAY" => Array("Name" => "Heizzone 03 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		//"HEATAREA[@nr='3']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 03 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		//"HEATAREA[@nr='3']/T_COOL_DAY" => Array("Name" => "Heizzone 03 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		//"HEATAREA[@nr='3']/T_COOL_NIGHT" => Array("Name" => "Heizzone 03 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		//"HEATAREA[@nr='3']/T_FLOOR_DAY" => Array("Name" => "Heizzone 03 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/HEATINGSYSTEM" => Array("Name" => "Heizzone 03 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		//"HEATAREA[@nr='3']/BLOCK_HC" => Array("Name" => "Heizzone 03 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/PROGRAM_WEEK" => Array("Name" => "Heizzone 03 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 03 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/PARTY" => Array("Name" => "Heizzone 03 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='3']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 03 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea03"),
		"HEATAREA[@nr='4']/HEATAREA_NAME" => Array("Name" => "Heizzone 04 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/HEATAREA_MODE" => Array("Name" => "Heizzone 04 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 92, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/T_ACTUAL" => Array("Name" => "Heizzone 04 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 90, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 04 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 93, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/T_TARGET" => Array("Name" => "Heizzone 04 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 91, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/HEATAREA_STATE" => Array("Name" => "Heizzone 04 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/PRESENCE" => Array("Name" => "Heizzone 04 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/T_TARGET_MIN" => Array("Name" => "Heizzone 04 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/T_TARGET_MAX" => Array("Name" => "Heizzone 04 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/RPM_MOTOR" => Array("Name" => "Heizzone 04 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/OFFSET" => Array("Name" => "Heizzone 04 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/T_HEAT_DAY" => Array("Name" => "Heizzone 04 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 04 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/T_COOL_DAY" => Array("Name" => "Heizzone 04 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/T_COOL_NIGHT" => Array("Name" => "Heizzone 04 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/T_FLOOR_DAY" => Array("Name" => "Heizzone 04 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/HEATINGSYSTEM" => Array("Name" => "Heizzone 04 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/BLOCK_HC" => Array("Name" => "Heizzone 04 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		//"HEATAREA[@nr='4']/BLOCK_HC" => Array("Name" => "Heizzone 04 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/PROGRAM_WEEK" => Array("Name" => "Heizzone 04 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 04 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/PARTY" => Array("Name" => "Heizzone 04 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='4']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 04 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea04"),
		"HEATAREA[@nr='5']/HEATAREA_NAME" => Array("Name" => "Heizzone 05 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/HEATAREA_MODE" => Array("Name" => "Heizzone 05 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 102, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/T_ACTUAL" => Array("Name" => "Heizzone 05 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 100, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 05 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 103, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/T_TARGET" => Array("Name" => "Heizzone 05 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 101, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/HEATAREA_STATE" => Array("Name" => "Heizzone 05 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/PRESENCE" => Array("Name" => "Heizzone 05 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/T_TARGET_MIN" => Array("Name" => "Heizzone 05 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/T_TARGET_MAX" => Array("Name" => "Heizzone 05 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/RPM_MOTOR" => Array("Name" => "Heizzone 05 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/OFFSET" => Array("Name" => "Heizzone 05 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/T_HEAT_DAY" => Array("Name" => "Heizzone 05 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 05 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/T_COOL_DAY" => Array("Name" => "Heizzone 05 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/T_COOL_NIGHT" => Array("Name" => "Heizzone 05 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/T_FLOOR_DAY" => Array("Name" => "Heizzone 05 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/HEATINGSYSTEM" => Array("Name" => "Heizzone 05 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/BLOCK_HC" => Array("Name" => "Heizzone 05 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		//"HEATAREA[@nr='5']/BLOCK_HC" => Array("Name" => "Heizzone 05 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/PROGRAM_WEEK" => Array("Name" => "Heizzone 05 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 05 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/PARTY" => Array("Name" => "Heizzone 05 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='5']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 05 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea05"),
		"HEATAREA[@nr='6']/HEATAREA_NAME" => Array("Name" => "Heizzone 06 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/HEATAREA_MODE" => Array("Name" => "Heizzone 06 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 112, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/T_ACTUAL" => Array("Name" => "Heizzone 06 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 110, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 06 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 113, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/T_TARGET" => Array("Name" => "Heizzone 06 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 111, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/HEATAREA_STATE" => Array("Name" => "Heizzone 06 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/PRESENCE" => Array("Name" => "Heizzone 06 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/T_TARGET_MIN" => Array("Name" => "Heizzone 06 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/T_TARGET_MAX" => Array("Name" => "Heizzone 06 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/RPM_MOTOR" => Array("Name" => "Heizzone 06 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/OFFSET" => Array("Name" => "Heizzone 06 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/T_HEAT_DAY" => Array("Name" => "Heizzone 06 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 06 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/T_COOL_DAY" => Array("Name" => "Heizzone 06 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/T_COOL_NIGHT" => Array("Name" => "Heizzone 06 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/T_FLOOR_DAY" => Array("Name" => "Heizzone 06 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/HEATINGSYSTEM" => Array("Name" => "Heizzone 06 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/BLOCK_HC" => Array("Name" => "Heizzone 06 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		//"HEATAREA[@nr='6']/BLOCK_HC" => Array("Name" => "Heizzone 06 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/PROGRAM_WEEK" => Array("Name" => "Heizzone 06 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 06 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/PARTY" => Array("Name" => "Heizzone 06 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='6']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 06 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea06"),
		"HEATAREA[@nr='7']/HEATAREA_NAME" => Array("Name" => "Heizzone 07 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/HEATAREA_MODE" => Array("Name" => "Heizzone 07 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 122, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/T_ACTUAL" => Array("Name" => "Heizzone 07 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 120, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 07 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 123, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/T_TARGET" => Array("Name" => "Heizzone 07 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 121, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/HEATAREA_STATE" => Array("Name" => "Heizzone 07 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/PRESENCE" => Array("Name" => "Heizzone 07 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/T_TARGET_MIN" => Array("Name" => "Heizzone 07 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/T_TARGET_MAX" => Array("Name" => "Heizzone 07 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/RPM_MOTOR" => Array("Name" => "Heizzone 07 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/OFFSET" => Array("Name" => "Heizzone 07 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/T_HEAT_DAY" => Array("Name" => "Heizzone 07 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 07 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/T_COOL_DAY" => Array("Name" => "Heizzone 07 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/T_COOL_NIGHT" => Array("Name" => "Heizzone 07 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/T_FLOOR_DAY" => Array("Name" => "Heizzone 07 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/HEATINGSYSTEM" => Array("Name" => "Heizzone 07 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/BLOCK_HC" => Array("Name" => "Heizzone 07 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		//"HEATAREA[@nr='7']/BLOCK_HC" => Array("Name" => "Heizzone 07 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/PROGRAM_WEEK" => Array("Name" => "Heizzone 07 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 07 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/PARTY" => Array("Name" => "Heizzone 07 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='7']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 07 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea07"),
		"HEATAREA[@nr='8']/HEATAREA_NAME" => Array("Name" => "Heizzone 08 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/HEATAREA_MODE" => Array("Name" => "Heizzone 08 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 132, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/T_ACTUAL" => Array("Name" => "Heizzone 08 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 130, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 08 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 133, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/T_TARGET" => Array("Name" => "Heizzone 08 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 131, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/HEATAREA_STATE" => Array("Name" => "Heizzone 08 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/PRESENCE" => Array("Name" => "Heizzone 08 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/T_TARGET_MIN" => Array("Name" => "Heizzone 08 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/T_TARGET_MAX" => Array("Name" => "Heizzone 08 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/RPM_MOTOR" => Array("Name" => "Heizzone 08 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/OFFSET" => Array("Name" => "Heizzone 08 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/T_HEAT_DAY" => Array("Name" => "Heizzone 08 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 08 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/T_COOL_DAY" => Array("Name" => "Heizzone 08 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/T_COOL_NIGHT" => Array("Name" => "Heizzone 08 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/T_FLOOR_DAY" => Array("Name" => "Heizzone 08 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/HEATINGSYSTEM" => Array("Name" => "Heizzone 08 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/BLOCK_HC" => Array("Name" => "Heizzone 08 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		//"HEATAREA[@nr='8']/BLOCK_HC" => Array("Name" => "Heizzone 08 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/PROGRAM_WEEK" => Array("Name" => "Heizzone 08 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 08 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/PARTY" => Array("Name" => "Heizzone 08 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='8']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 08 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea08"),
		"HEATAREA[@nr='9']/HEATAREA_NAME" => Array("Name" => "Heizzone 09 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/HEATAREA_MODE" => Array("Name" => "Heizzone 09 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 142, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/T_ACTUAL" => Array("Name" => "Heizzone 09 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 140, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 09 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 143, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/T_TARGET" => Array("Name" => "Heizzone 09 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 141, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/HEATAREA_STATE" => Array("Name" => "Heizzone 09 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/PRESENCE" => Array("Name" => "Heizzone 09 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/T_TARGET_MIN" => Array("Name" => "Heizzone 09 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/T_TARGET_MAX" => Array("Name" => "Heizzone 09 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/RPM_MOTOR" => Array("Name" => "Heizzone 09 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/OFFSET" => Array("Name" => "Heizzone 09 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/T_HEAT_DAY" => Array("Name" => "Heizzone 09 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 09 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/T_COOL_DAY" => Array("Name" => "Heizzone 09 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/T_COOL_NIGHT" => Array("Name" => "Heizzone 09 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/T_FLOOR_DAY" => Array("Name" => "Heizzone 09 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/HEATINGSYSTEM" => Array("Name" => "Heizzone 09 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/BLOCK_HC" => Array("Name" => "Heizzone 09 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		//"HEATAREA[@nr='9']/BLOCK_HC" => Array("Name" => "Heizzone 09 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/PROGRAM_WEEK" => Array("Name" => "Heizzone 09 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 09 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/PARTY" => Array("Name" => "Heizzone 09 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='9']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 09 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea09"),
		"HEATAREA[@nr='10']/HEATAREA_NAME" => Array("Name" => "Heizzone 10 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/HEATAREA_MODE" => Array("Name" => "Heizzone 10 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 152, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/T_ACTUAL" => Array("Name" => "Heizzone 10 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 150, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 10 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 153, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/T_TARGET" => Array("Name" => "Heizzone 10 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 151, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/HEATAREA_STATE" => Array("Name" => "Heizzone 10 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/PRESENCE" => Array("Name" => "Heizzone 10 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/T_TARGET_MIN" => Array("Name" => "Heizzone 10 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/T_TARGET_MAX" => Array("Name" => "Heizzone 10 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/RPM_MOTOR" => Array("Name" => "Heizzone 10 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/OFFSET" => Array("Name" => "Heizzone 10 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/T_HEAT_DAY" => Array("Name" => "Heizzone 10 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 10 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/T_COOL_DAY" => Array("Name" => "Heizzone 10 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/T_COOL_NIGHT" => Array("Name" => "Heizzone 10 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/T_FLOOR_DAY" => Array("Name" => "Heizzone 10 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/HEATINGSYSTEM" => Array("Name" => "Heizzone 10 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/BLOCK_HC" => Array("Name" => "Heizzone 10 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		//"HEATAREA[@nr='10']/BLOCK_HC" => Array("Name" => "Heizzone 10 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/PROGRAM_WEEK" => Array("Name" => "Heizzone 10 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 10 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/PARTY" => Array("Name" => "Heizzone 10 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='10']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 10 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea10"),
		"HEATAREA[@nr='11']/HEATAREA_NAME" => Array("Name" => "Heizzone 11 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/HEATAREA_MODE" => Array("Name" => "Heizzone 11 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 162, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/T_ACTUAL" => Array("Name" => "Heizzone 11 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 160, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 11 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 163, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/T_TARGET" => Array("Name" => "Heizzone 11 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 161, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/HEATAREA_STATE" => Array("Name" => "Heizzone 11 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/PRESENCE" => Array("Name" => "Heizzone 11 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/T_TARGET_MIN" => Array("Name" => "Heizzone 11 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/T_TARGET_MAX" => Array("Name" => "Heizzone 11 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/RPM_MOTOR" => Array("Name" => "Heizzone 11 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/OFFSET" => Array("Name" => "Heizzone 11 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/T_HEAT_DAY" => Array("Name" => "Heizzone 11 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 11 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/T_COOL_DAY" => Array("Name" => "Heizzone 11 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/T_COOL_NIGHT" => Array("Name" => "Heizzone 11 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/T_FLOOR_DAY" => Array("Name" => "Heizzone 11 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/HEATINGSYSTEM" => Array("Name" => "Heizzone 11 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/BLOCK_HC" => Array("Name" => "Heizzone 11 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		//"HEATAREA[@nr='11']/BLOCK_HC" => Array("Name" => "Heizzone 11 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/PROGRAM_WEEK" => Array("Name" => "Heizzone 11 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 11 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/PARTY" => Array("Name" => "Heizzone 11 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='11']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 11 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea11"),
		"HEATAREA[@nr='12']/HEATAREA_NAME" => Array("Name" => "Heizzone 12 Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/HEATAREA_MODE" => Array("Name" => "Heizzone 12 Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 172, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/T_ACTUAL" => Array("Name" => "Heizzone 12 Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 170, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/T_ACTUAL_EXT" => Array("Name" => "Heizzone 12 Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 173, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/T_TARGET" => Array("Name" => "Heizzone 12 Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 171, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/HEATAREA_STATE" => Array("Name" => "Heizzone 12 Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/PRESENCE" => Array("Name" => "Heizzone 12 Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/T_TARGET_MIN" => Array("Name" => "Heizzone 12 Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/T_TARGET_MAX" => Array("Name" => "Heizzone 12 Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		//"HEATAREA[@nr='12']/RPM_MOTOR" => Array("Name" => "Heizzone 12 Drehzahl Lüftmotor", "Type" => 1, "Profile" => "MH.HeatAreaRPMMotor", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/OFFSET" => Array("Name" => "Heizzone 12 Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		//"HEATAREA[@nr='12']/T_HEAT_DAY" => Array("Name" => "Heizzone 12 Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		//"HEATAREA[@nr='12']/T_HEAT_NIGHT" => Array("Name" => "Heizzone 12 Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		//"HEATAREA[@nr='12']/T_COOL_DAY" => Array("Name" => "Heizzone 12 Temperatur Kühlen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		//"HEATAREA[@nr='12']/T_COOL_NIGHT" => Array("Name" => "Heizzone 12 Temperatur Kühlen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		//"HEATAREA[@nr='12']/T_FLOOR_DAY" => Array("Name" => "Heizzone 12 Bodentemperatur Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/HEATINGSYSTEM" => Array("Name" => "Heizzone 12 Heizsystem", "Type" => 1, "Profile" => "MH.HeatingSystem", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		//"HEATAREA[@nr='12']/BLOCK_HC" => Array("Name" => "Heizzone 12 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12")
		//"HEATAREA[@nr='12']/BLOCK_HC" => Array("Name" => "Heizzone 12 Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/PROGRAM_WEEK" => Array("Name" => "Heizzone 12 Programm wochentags", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/PROGRAM_WEEKEND" => Array("Name" => "Heizzone 12 Programm Wochenende", "Type" => 1, "Profile" => "MH.HeatAreaProgram", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/PARTY" => Array("Name" => "Heizzone 12 Partyschaltung (Stunden)", "Type" => 1, "Profile" => "MH.HeatAreaParty", "Action" => true, "Position" => 200, "Keep" => "ShowHeatArea12"),
		"HEATAREA[@nr='12']/PARTY_REMAININGTIME" => Array("Name" => "Heizzone 12 Partyschaltung Restzeit (min)", "Type" => 1, "Profile" => "MH.HeatAreaPartyRemainingTime", "Action" => false, "Position" => 200, "Keep" => "ShowHeatArea12")
	);

	private static $valuesHeatCtrl = Array(
		"HEATCTRL[@nr='1']/INUSE" => Array("Name" => "Heizkreis 01 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='1']/ACTOR" => Array("Name" => "Heizkreis 01 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='1']/HEATAREA_NR" => Array("Name" => "Heizkreis 01 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='1']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 01 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/INUSE" => Array("Name" => "Heizkreis 02 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/ACTOR" => Array("Name" => "Heizkreis 02 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/HEATAREA_NR" => Array("Name" => "Heizkreis 02 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 02 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/INUSE" => Array("Name" => "Heizkreis 03 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/ACTOR" => Array("Name" => "Heizkreis 03 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/HEATAREA_NR" => Array("Name" => "Heizkreis 03 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 03 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/INUSE" => Array("Name" => "Heizkreis 04 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/ACTOR" => Array("Name" => "Heizkreis 04 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/HEATAREA_NR" => Array("Name" => "Heizkreis 04 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 04 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/INUSE" => Array("Name" => "Heizkreis 05 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/ACTOR" => Array("Name" => "Heizkreis 05 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/HEATAREA_NR" => Array("Name" => "Heizkreis 05 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 05 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/INUSE" => Array("Name" => "Heizkreis 06 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/ACTOR" => Array("Name" => "Heizkreis 06 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/HEATAREA_NR" => Array("Name" => "Heizkreis 06 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 06 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/INUSE" => Array("Name" => "Heizkreis 07 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/ACTOR" => Array("Name" => "Heizkreis 07 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/HEATAREA_NR" => Array("Name" => "Heizkreis 07 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 07 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/INUSE" => Array("Name" => "Heizkreis 08 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/ACTOR" => Array("Name" => "Heizkreis 08 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/HEATAREA_NR" => Array("Name" => "Heizkreis 08 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 08 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/INUSE" => Array("Name" => "Heizkreis 09 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/ACTOR" => Array("Name" => "Heizkreis 09 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/HEATAREA_NR" => Array("Name" => "Heizkreis 09 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 09 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/INUSE" => Array("Name" => "Heizkreis 10 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/ACTOR" => Array("Name" => "Heizkreis 10 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/HEATAREA_NR" => Array("Name" => "Heizkreis 10 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 10 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/INUSE" => Array("Name" => "Heizkreis 11 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/ACTOR" => Array("Name" => "Heizkreis 11 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/HEATAREA_NR" => Array("Name" => "Heizkreis 11 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 11 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/INUSE" => Array("Name" => "Heizkreis 12 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/ACTOR" => Array("Name" => "Heizkreis 12 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/HEATAREA_NR" => Array("Name" => "Heizkreis 12 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 12 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250)
	);

	private static $valuesHeatCtrlExt = Array(
		"HEATCTRL[@nr='%d']/INUSE" => Array("Name" => "Heizkreis %'.02d Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/ACTOR" => Array("Name" => "Heizkreis %'.02d Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/ACTOR_PERCENT" => Array("Name" => "Heizkreis %'.02d Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/HEATAREA_NR" => Array("Name" => "Heizkreis %'.02d zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/HEATCTRL_STATE" => Array("Name" => "Heizkreis %'.02d Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250, "Keep" => "ShowHeatCtrl%'.02d")
    );

	private static $valuesHeatCtrlExtold  = Array(
		"HEATCTRL[@nr='2']/INUSE" => Array("Name" => "Heizkreis 02 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/ACTOR" => Array("Name" => "Heizkreis 02 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 02 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/HEATAREA_NR" => Array("Name" => "Heizkreis 02 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='2']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 02 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/INUSE" => Array("Name" => "Heizkreis 03 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/ACTOR" => Array("Name" => "Heizkreis 03 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 03 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/HEATAREA_NR" => Array("Name" => "Heizkreis 03 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='3']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 03 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/INUSE" => Array("Name" => "Heizkreis 04 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/ACTOR" => Array("Name" => "Heizkreis 04 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 04 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/HEATAREA_NR" => Array("Name" => "Heizkreis 04 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='4']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 04 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/INUSE" => Array("Name" => "Heizkreis 05 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/ACTOR" => Array("Name" => "Heizkreis 05 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 05 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/HEATAREA_NR" => Array("Name" => "Heizkreis 05 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='5']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 05 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/INUSE" => Array("Name" => "Heizkreis 06 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/ACTOR" => Array("Name" => "Heizkreis 06 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 06 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/HEATAREA_NR" => Array("Name" => "Heizkreis 06 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='6']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 06 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/INUSE" => Array("Name" => "Heizkreis 07 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/ACTOR" => Array("Name" => "Heizkreis 07 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 07 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/HEATAREA_NR" => Array("Name" => "Heizkreis 07 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='7']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 07 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/INUSE" => Array("Name" => "Heizkreis 08 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/ACTOR" => Array("Name" => "Heizkreis 08 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 08 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/HEATAREA_NR" => Array("Name" => "Heizkreis 08 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='8']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 08 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/INUSE" => Array("Name" => "Heizkreis 09 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/ACTOR" => Array("Name" => "Heizkreis 09 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 09 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/HEATAREA_NR" => Array("Name" => "Heizkreis 09 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='9']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 09 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/INUSE" => Array("Name" => "Heizkreis 10 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/ACTOR" => Array("Name" => "Heizkreis 10 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 10 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/HEATAREA_NR" => Array("Name" => "Heizkreis 10 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='10']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 10 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/INUSE" => Array("Name" => "Heizkreis 11 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/ACTOR" => Array("Name" => "Heizkreis 11 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 11 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/HEATAREA_NR" => Array("Name" => "Heizkreis 11 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='11']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 11 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/INUSE" => Array("Name" => "Heizkreis 12 Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/ACTOR" => Array("Name" => "Heizkreis 12 Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/ACTOR_PERCENT" => Array("Name" => "Heizkreis 12 Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/HEATAREA_NR" => Array("Name" => "Heizkreis 12 zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 250),
		"HEATCTRL[@nr='12']/HEATCTRL_STATE" => Array("Name" => "Heizkreis 12 Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 250)
	);

	public function Create(){
		//Never delete this line!
		parent::Create();

		//These lines are parsed on Symcon Startup or Instance creation
		//You cannot use variables here. Just static values.
		$this->RegisterPropertyString("IPAddress", "172.17.31.161");
		$this->RegisterPropertyInteger("Interval", 0);
        // Base Settings
        $this->RegisterPropertyBoolean("ShowVacation", false);
        $this->RegisterPropertyBoolean("ShowNetwork", false);
        $this->RegisterPropertyBoolean("ShowCloud", false);
        $this->RegisterPropertyBoolean("ShowKWLCTRL", false);
        $this->RegisterPropertyBoolean("ShowCode", false);
        $this->RegisterPropertyBoolean("ShowProgramm", false);
        $this->RegisterPropertyBoolean("ShowPumpOutput", false);
        $this->RegisterPropertyBoolean("ShowRelais", false);
        $this->RegisterPropertyBoolean("ShowChangeOverFunc", false);
        $this->RegisterPropertyBoolean("ShowEmergencyMode", false);
        $this->RegisterPropertyBoolean("ShowValveProtect", false);
        $this->RegisterPropertyBoolean("ShowPumpProtect", false);

        $this->RegisterPropertyBoolean("ShowHeatArea01", true);
        $this->RegisterPropertyBoolean("ShowHeatArea01Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea02", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea03", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea04", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea05", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea06", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea07", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea08", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea09", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea10", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea11", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea12", false);
        $this->RegisterPropertyBoolean("ShowHeatArea12Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea12Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea12FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea12System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea12Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea12Party", false);

		//Timer
		$this->RegisterTimer("UpdateTimer", 0, 'MAlpha2_RequestStatus($_IPS[\'TARGET\']);');

		//Variablenprofile
		//ANTIFREEZE_TEMP
        $this->RegisterProfile(
            'MH.AntifreezeTemp','Temperature','','°C',
            5,10, 1, 0,1);
		// TEMPERATUREUNIT
        $this->RegisterProfileAssociation(
            'MH.TemperatureUnit','Temperature','','',
            0,1,1,0,1,
            [
                [0, $this->Translate('Celsius'), '', -1],
                [1, $this->Translate('Fahrenheit'), '', -1],
            ]
        );
		//SUMMERWINTER
        $this->RegisterProfileAssociation(
            'MH.SummerWinter','Temperature','','',
            0,1,1,0,0,
            [
                [0, $this->Translate('On'), '', -1],
                [1, $this->Translate('Automatic'), '', -1],
            ]
        );
		//CHANGEOVER
        $this->RegisterProfileAssociation(
            'MH.ChangeOver','Temperature','','',
            0,1,1,0,0,
            [
                [0, $this->Translate('Heizen'), '', -1],
                [1, $this->Translate('Kühlen'), '', -1],
            ]
        );
		//MODE
        $this->RegisterProfileAssociation(
            'MH.Mode','IPS','','',
            0,2,1,0,1,
            [
                [0, $this->Translate('Standalone'), '', -1],
                [1, $this->Translate('Master'), '', -1],
                [2, $this->Translate('Slave'), '', -1],
            ]
        );
		//ECO_DIFF
        $this->RegisterProfile(
            'MH.EcoDiff','Temperature','','°C',
            2.0,6.0, 0.1, 1,2);
		//VACATION_STATE
        $this->RegisterProfileAssociation(
            'MH.VacationState','Calendar','','',
            0,2,1,0,1,
            [
                [0, $this->Translate('Off'), '', -1],
                [1, $this->Translate('Scheduled'), '', -1],
                [2, $this->Translate('Active'), '', -1],
            ]
        );
		//PUMP_TIME
        $this->RegisterProfile(
            'MH.PumpTime','Clock','','min',
            0,5, 1, 0,1);
		//RELAIS_TIME
        $this->RegisterProfile(
            'MH.RelaisTime','Clock','','min',
            0,60, 1, 0,1);
		//EMERGENCYMODE_TIME
        $this->RegisterProfile(
            'MH.EmergencyTime','Clock','','min',
            30,600, 30, 0,1);
		//PWMCYCLE
        $this->RegisterProfile(
            'MH.PWMCycle','Clock','','min',
            10,30, 1, 0,1);
		//PWMPERCENT
        $this->RegisterProfile(
            'MH.PWMPercent','Clock','','%',
            1,100, 5, 0,1);
		//HEATAREA_MODE
        $this->RegisterProfileAssociation(
            'MH.HeatAreaMode','Shutter','','',
            0,2,1,0,1,
            [
                [0, $this->Translate('Auto'), 'Ok', 0x0000FF],
                [1, $this->Translate('Day'), 'Sun', -1],
                [2, $this->Translate('Night'), 'Moon', -1],
            ]
        );
		//HEATAREA_PROGRAM
        $this->RegisterProfile(
            'MH.HeatAreaProgram','IPS','','',
            1,3, 1, 0,1);
		//HEATAREA_PARTY
        $this->RegisterProfile(
            'MH.HeatAreaParty','Melody','','',
            1,24, 1, 0,1);
		//HEATAREA_PARTY_REMAININGTIME
        $this->RegisterProfile(
            'MH.HeatAreaPartyRemainingTime','Melody','','',
            1,1440, 1, 0,1);
		//HEATAREA_STATE
        $this->RegisterProfileAssociation(
            'MH.HeatAreaState','Power','','',
            0,0,0,0,0,
            [
                [0, $this->Translate('OK'), '', -1],
                [1, $this->Translate('Error'), '', 0xFF0000]
            ]
        );
		//HEATAREA_RPM_MOTOR
        $this->RegisterProfileAssociation(
            'MH.HeatAreaRPMMotor','TurnRight','','%',
            0,100,25,0,1,
            [
                [0, $this->Translate('Off'), '', -1],
                [25, $this->Translate('25%'), '', -1],
                [50, $this->Translate('50%'), '', -1],
                [75, $this->Translate('75%'), '', -1],
                [100, $this->Translate('100%'), '', -1]
            ]
        );
		//HEATAREA_HEATINGSYSTEM
        $this->RegisterProfileAssociation(
            'MH.HeatingSystem','Lock','','',
            0,4,1,0,1,
            [
                [0, $this->Translate('FBH-Standard'), '', -1],
                [1, $this->Translate('FHB-Niedrigenergie'), '', -1],
                [2, $this->Translate('Radiator'), '', -1],
                [3, $this->Translate('Konvektor passiv'), '', -1],
                [4, $this->Translate('Konvektor aktiv'), '', -1]
            ]
        );
		//HEATAREA_T_ACTUAL_TEMP
        $this->RegisterProfile(
            'MH.HeatAreaTActualTemp','Temperature','','°',
            -50,100, 0.11, 1,2);
		//HEATAREA_T_TARGET
        $this->RegisterProfile(
            'MH.HeatAreaTTarget','Temperature','','°',
            5,30, 0.2, 1,2);
		//HEATAREA_T_HEATCOOL
        $this->RegisterProfile(
            'MH.HeatAreaTHeatCool','Temperature','','°',
            5,30, 1, 1,2);
		//HEATAREA_OFFSET
        $this->RegisterProfile(
                'MH.HeatAreaOffset','Temperature','','°',
                -2, 2, 0.1, 1,2);
		//HEATAREA_BLOCK_HC
        $this->RegisterProfileAssociation(
            'MH.HeatAreaBlockHC','Lock','','',
            0,2,1,0,1,
            [
                [0, $this->Translate('Normal'), '', -1],
                [1, $this->Translate('Heizen sperren'), '', -1],
                [2, $this->Translate('Kühlen sperren'), '', -1],
            ]
        );
		//HEATAREA_HEATCTRL_STATE
        $this->RegisterProfileAssociation(
            'MH.HeatAreaHeatCTRLState','Shutter','','',
            0,2,1,0,1,
            [
                [0, $this->Translate('Off'), '', -1],
                [1, $this->Translate('On'), '', 0x00FF00],
                [2, $this->Translate('Error'), '', 0xFF0000],
            ]
        );
		//HEATAREA_HEATCTRL_NR
        $this->RegisterProfile(
            'MH.HeatAreaNr','Shutter','','',
            1, 12, 1, 0,1);
		//HEATAREA_RPM_MOTOR
        $this->RegisterProfile(
            'MH.HeatCtrlActorPercent','Intensity','','%',
            1, 100, 1, 0,1);
	}

	public function Destroy(){
		//Never delete this line!
		parent::Destroy();

	}

	public function ApplyChanges(){
		//Never delete this line!
		parent::ApplyChanges();

		$this->SetTimerInterval("UpdateTimer", $this->ReadPropertyInteger("Interval")*1000);

		$this->MaintainArray(self::$base);
		for ($i= 1; $i <= 12; $i++)
		{
            $this->MaintainArray( self::$values, $i );
        }
		
	}

    /**
     * register profiles
     * @param $Name
     * @param $Icon
     * @param $Prefix
     * @param $Suffix
     * @param $MinValue
     * @param $MaxValue
     * @param $StepSize
     * @param $Digits
     * @param $Vartype
     */
    protected function RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype)
    {
        if (!IPS_VariableProfileExists($Name))
        {
            IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
        } else {
            $profile = IPS_GetVariableProfile($Name);
            if ($profile['ProfileType'] != $Vartype) {
                $this->_debug('profile', 'Variable profile type does not match for profile ' . $Name);
            }
        }
        IPS_SetVariableProfileIcon($Name, $Icon);
        IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
        IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
        IPS_SetVariableProfileValues($Name, $MinValue, $MaxValue, $StepSize); // string $ProfilName, float $Minimalwert, float $Maximalwert, float $Schrittweite
    }

    /**
     * register profile association
     * @param $Name
     * @param $Icon
     * @param $Prefix
     * @param $Suffix
     * @param $MinValue
     * @param $MaxValue
     * @param $Stepsize
     * @param $Digits
     * @param $Vartype
     * @param $Associations
     */
    protected function RegisterProfileAssociation($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype, $Associations)
    {
        if (is_array($Associations) && sizeof($Associations) === 0) {
            $MinValue = 0;
            $MaxValue = 0;
        }
        $this->RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype);
        if (is_array($Associations)) {
            foreach ($Associations AS $Association) {
                IPS_SetVariableProfileAssociation($Name, $Association[0], $Association[1], $Association[2], $Association[3]);
            }
        } else {
            $Associations = $this->$Associations;
            foreach ($Associations AS $code => $association) {
                IPS_SetVariableProfileAssociation($Name, $code, $this->Translate($association), $Icon, -1);
            }
        }
    }


    /**
     * @param $Ident
     * @param $Value
     * @throws Exception
     */
    public function WriteValue($Ident, $Value) {

		$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><Devices></Devices>');

		if(GetValueString($this->GetIDForIdent("ID")) == "") {
			echo "BaseID not requested yet. Please request values at least once!";
			return;
		}
		
		$Device = $xml->addChild('Device');
		$Device->addChild('ID', GetValueString($this->GetIDForIdent("ID")));

		if(self::GetTypeForIdent($Ident) == 0 /* Boolean */)
			$Value = $Value ? "1" : "0";
		if(self::GetTypeForIdent($Ident) == 2 /* Float */)
			$Value = str_replace(",", ".", $Value);
		
		$Key = self::GetKeyForIdent($Ident);
		if(strpos($Key, "/") === false) {
			$Device->addChild($Key, $Value);
		} else {
			$KeySplit = explode("/", $Key);
			$Attr = "";
			
			$AttrPos = strpos($KeySplit[0], "[");
			if($AttrPos !== false) {
				$Attr = substr($KeySplit[0], $AttrPos+6, 1);
				$KeySplit[0] = substr($KeySplit[0], 0, $AttrPos);
			}

			$Command = $Device->addChild($KeySplit[0]);
			if($Attr != "") {
				$Command->addAttribute('nr', $Attr);
			}
			$Command->addChild($KeySplit[1], $Value);
		}

		//IPS_LogMessage("Alpha2", $xml->asXML());

        // Wurden die Änderung erfolgreich an die Basis gesendet wird der Wert in IP Symcon aktuallisiert
		if ($this->sendChanges($xml))
		{
			SetValue($this->GetIDForIdent($Ident), $Value);
		}
		
	}

	public function RequestAction($Ident, $Value) {
		
		$this->WriteValue($Ident, $Value);
		
	}

	private function SendChanges($Xml){
		
		$url = "http://".$this->ReadPropertyString('IPAddress')."/data/changes.xml";
		$header  = "POST HTTP/1.0 \r\n";
		$header .= "Content-type: text/xml \r\n";
		$header .= "Content-length: ".strlen($Xml->asXML())." \r\n";
		$header .= "Content-transfer-encoding: text \r\n";
		$header .= "Connection: close \r\n\r\n";
		$header .= $Xml->asXML();

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

		$data = curl_exec($ch);

		// Konnten die Daten nicht an die Basis gesendet werden false zurückgeben
		if(curl_errno($ch))
		{
			print curl_error($ch);
			curl_close($ch);
			return false;
		}
    	curl_close($ch);

		// Prüfe ob $data OK zurückliefert
        /*
         * <?xml version="1.0" encoding="UTF-8"?>
         * <COMMANDRESPONSE>
         *    <STATE>OK</STATE>
         *    <ERRORNUMBER>0</ERRORNUMBER>
         * </COMMANDRESPONSE>
         */
        return true;
	}

	public function RequestStatus()
    {
		$xml = @simplexml_load_file("http://".$this->ReadPropertyString('IPAddress')."/data/static.xml");
		if($xml === false)
		{
			return;
		}
		$this->SetValuesArray(self::$base, $xml);
		for ($i=1; $i <= 12; $i++)
		{
            $this->SetValuesArray( self::$values, $xml, $i );
        }
		
		if (GetValue($this->GetIDForIdent($this->ReduceToIdent("VERS_SW_STM"))) >= "02.02")
		{
		    for ($i=1; $i <= 12; $i++)
		    {
		        $this->SendDebug("Heiz Control: ",  $xml->Device->{'HEATCTRL nr="' . $i .'"'}->INUSE, 0);
		        if ($xml->Device->{'HEATCTRL nr="' . $i .'"'}->INUSE == 1)
		        {
                    $this->MaintainArray( self::$valuesHeatCtrlExt, $i );
                    $this->SetValuesArray( self::$valuesHeatCtrlExt, $xml, $i );
                }
            }
		}
		else
		{
			$this->MaintainArray(self::$valuesHeatCtrl);
			$this->SetValuesArray(self::$valuesHeatCtrl, $xml);
		}

	}

	private function MaintainArray($Array, $HeatNr = null)
    {
		foreach($Array as $key => $value)
		{
			if(!isset($value["Keep"]))
			{
				$keep = true;
			}
			else
			{
				$keep = $this->ReadPropertyBoolean(sprintf($value['Keep'], $HeatNr));
			}
			$this->MaintainVariable($this->ReduceToIdent(sprintf($key, $HeatNr)), sprintf($this->Translate( $value["Name"]), $HeatNr), $value["Type"], $value["Profile"], $value["Position"], $keep);

			if ($keep && $value["Action"])
			{
				$this->EnableAction($this->ReduceToIdent(sprintf($key, $HeatNr)));
			}
		}
	}

	private function SetValuesArray($Array, $Xml, $HeatNr = null)
    {
		foreach($Array as $key => $value)
		{
			if(!isset($value["Keep"]))
			{
				$keep = true;
			}
			else
			{
				$keep = $this->ReadPropertyBoolean(sprintf($value['Keep'], $HeatNr));
			}
			
			if ($keep && (sizeof($Xml->Device->xpath(sprintf($key, $HeatNr))) != 0))
			{
				SetValue($this->GetIDForIdent($this->ReduceToIdent(sprintf($key, $HeatNr))), (string)$Xml->Device->xpath(sprintf($key, $HeatNr))[0]);
			}
		}
	}

	private function ReduceToIdent($ID)
    {
        $ReplacIdent = str_replace(Array("[@nr='", "']", "/"), Array("", "", "_"), $ID);
        $ReplacIdent = str_replace(Array("[@shiftingtime='", "']", "/"), Array("", "", "_"), $ReplacIdent);
        return $ReplacIdent;
//		return str_replace(Array("[@nr='", "']", "/"), Array("", "", "_"), $ID);
	}

	private function GetKeyForIdent($Ident) {
		
		foreach(self::$values as $key => $value) {
			if(self::ReduceToIdent($key) == $Ident) {
				return $key;
			}
		}
		
		foreach(self::$valuesHeatCtrlExt as $key => $value) {
			if(self::ReduceToIdent($key) == $Ident) {
				return $key;
			}
		}
		
		throw new Exception("Cannot find key for ident");
		
	}

	private function GetTypeForIdent($Ident) {
		
		foreach(self::$values as $key => $value) {
			if(self::ReduceToIdent($key) == $Ident) {
				return $value["Type"];
			}
		}
		
		foreach(self::$valuesHeatCtrlExt as $key => $value) {
			if(self::ReduceToIdent($key) == $Ident) {
				return $value["Type"];
			}
		}
		
		throw new Exception("Cannot find type for ident");
		
	}

}
?>