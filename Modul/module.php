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
        "HEATAREA[@nr='%d']/HEATAREA_NAME" => Array("Name" => "Heizzone %'.02d Name", "Type" => 3, "Profile" => "", "Action" => true, "Position" => 1, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/HEATAREA_MODE" => Array("Name" => "Heizzone %'.02d Betriebsmodus", "Type" => 1, "Profile" => "MH.HeatAreaMode", "Action" => true, "Position" => 3, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_ACTUAL" => Array("Name" => "Heizzone %'.02d Ist Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 4, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_ACTUAL_EXT" => Array("Name" => "Heizzone %'.02d Ist Temperatur Ext. Sensor", "Type" => 2, "Profile" => "MH.HeatAreaTActualTemp", "Action" => false, "Position" => 5, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_TARGET" => Array("Name" => "Heizzone %'.02d Soll Temperatur", "Type" => 2, "Profile" => "MH.HeatAreaTTarget", "Action" => true, "Position" => 6, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/HEATAREA_STATE" => Array("Name" => "Heizzone %'.02d Status", "Type" => 0, "Profile" => "MH.HeatAreaState", "Action" => false, "Position" => 2, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/PRESENCE" => Array("Name" => "Heizzone %'.02d Anwesenheit", "Type" => 0, "Profile" => "~Presence", "Action" => true, "Position" => 11, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_TARGET_MIN" => Array("Name" => "Heizzone %'.02d Soll Temperatur Min", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 9, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_TARGET_MAX" => Array("Name" => "Heizzone %'.02d Soll Temperatur Max", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 10, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/OFFSET" => Array("Name" => "Heizzone %'.02d Korrektur Ist-Werterfassung", "Type" => 2, "Profile" => "MH.HeatAreaOffset", "Action" => true, "Position" => 12, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_HEAT_DAY" => Array("Name" => "Heizzone %'.02d Temperatur Heizen Tag", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 7, "Keep" => "ShowHeatArea%'.02d"),
		"HEATAREA[@nr='%d']/T_HEAT_NIGHT" => Array("Name" => "Heizzone %'.02d Temperatur Heizen Nacht", "Type" => 2, "Profile" => "MH.HeatAreaTHeatCool", "Action" => true, "Position" => 8, "Keep" => "ShowHeatArea%'.02d"),
        "HEATAREA[@nr='%d']/BLOCK_HC" => Array("Name" => "Heizzone %'.02d Heizen oder Kühlen sperren", "Type" => 1, "Profile" => "MH.HeatAreaBlockHC", "Action" => true, "Position" => 13, "Keep" => "ShowHeatArea%'.02d"),
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

	private static $valuesHeatCtrl = Array(
//		"HEATCTRL[@nr='%d']/INUSE" => Array("Name" => "Heizkreis %'.02d Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 17, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/ACTOR" => Array("Name" => "Heizkreis %'.02d Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 16), "Keep" => "ShowHeatCtrl%'.02d",
//		"HEATCTRL[@nr='%d']/HEATAREA_NR" => Array("Name" => "Heizkreis %'.02d zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 18, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/HEATCTRL_STATE" => Array("Name" => "Heizkreis %'.02d Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 15, "Keep" => "ShowHeatCtrl%'.02d")
    );

	private static $valuesHeatCtrlExt = Array(
//		"HEATCTRL[@nr='%d']/INUSE" => Array("Name" => "Heizkreis %'.02d Aktiv", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 17, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/ACTOR" => Array("Name" => "Heizkreis %'.02d Aktor", "Type" => 0, "Profile" => "~Switch", "Action" => false, "Position" => 16, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/ACTOR_PERCENT" => Array("Name" => "Heizkreis %'.02d Aktor Prozent", "Type" => 1, "Profile" => "MH.HeatCtrlActorPercent", "Action" => false, "Position" => 18, "Keep" => "ShowHeatCtrl%'.02d"),
//		"HEATCTRL[@nr='%d']/HEATAREA_NR" => Array("Name" => "Heizkreis %'.02d zugewiesene Heizzone", "Type" => 1, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 19, "Keep" => "ShowHeatCtrl%'.02d"),
		"HEATCTRL[@nr='%d']/HEATCTRL_STATE" => Array("Name" => "Heizkreis %'.02d Status", "Type" => 1, "Profile" => "MH.HeatAreaHeatCTRLState", "Action" => false, "Position" => 15, "Keep" => "ShowHeatCtrl%'.02d")
    );

    private static $valuesIODevice = Array(
		"IODEVICE[@nr='%d']/IODEVICE_TYPE" => Array("Name" => "IO Device %'.02d Type", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 20, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/IODEVICE_ID" => Array("Name" => "IO Device%'.02d ID", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 21, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/IODEVICE_VERS_HW" => Array("Name" => "IO Device%'.02d Hardware Version", "Type" => 3, "Profile" => "", "Action" => false, "Position" => 22, "Keep" => "ShowIODevice%'.02d"),
		"IODEVICE[@nr='%d']/IODEVICE_VERS_SW" => Array("Name" => "IO Device%'.02d Software Version", "Type" => 3, "Profile" => "MH.HeatAreaNr", "Action" => false, "Position" => 23, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/HEATAREA_NR" => Array("Name" => "IO Device%'.02d Heatarea", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 24, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/SIGNALSTRENGTH" => Array("Name" => "IO Device%'.02d Signalstength", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 25, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/BATTERY" => Array("Name" => "IO Device%'.02d Battery", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 26, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/IODEVICE_STATE" => Array("Name" => "IO Device%'.02d State", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 27, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/IODEVICE_COMERROR" => Array("Name" => "IO Device%'.02d Communication Error", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 28, "Keep" => "ShowIODevice%'.02d"),
        "IODEVICE[@nr='%d']/ISON" => Array("Name" => "IO Device%'.02d ISON", "Type" => 1, "Profile" => "", "Action" => false, "Position" => 29, "Keep" => "ShowIODevice%'.02d")
    );

	public function Create()
    {
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
        $this->RegisterPropertyBoolean("ShowHeatCtrl01", false);
        $this->RegisterPropertyBoolean("ShowIODevice01", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea01Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea02", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl02", false);
        $this->RegisterPropertyBoolean("ShowIODevice02", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea02Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea03", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl03", false);
        $this->RegisterPropertyBoolean("ShowIODevice03", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea03Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea04", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl04", false);
        $this->RegisterPropertyBoolean("ShowIODevice04", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea04Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea05", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl05", false);
        $this->RegisterPropertyBoolean("ShowIODevice05", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea05Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea06", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl06", false);
        $this->RegisterPropertyBoolean("ShowIODevice06", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea06Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea07", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl07", false);
        $this->RegisterPropertyBoolean("ShowIODevice07", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea07Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea08", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl08", false);
        $this->RegisterPropertyBoolean("ShowIODevice08", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea08Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea09", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl09", false);
        $this->RegisterPropertyBoolean("ShowIODevice09", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea09Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea10", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl10", false);
        $this->RegisterPropertyBoolean("ShowIODevice10", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea10Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea11", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl11", false);
        $this->RegisterPropertyBoolean("ShowIODevice11", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Motor", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Cooling", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11FloorTemp", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11System", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Program", false);
        $this->RegisterPropertyBoolean("ShowHeatArea11Party", false);

		$this->RegisterPropertyBoolean("ShowHeatArea12", false);
        $this->RegisterPropertyBoolean("ShowHeatCtrl12", false);
        $this->RegisterPropertyBoolean("ShowIODevice12", false);
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

	public function Destroy()
    {
		//Never delete this line!
		parent::Destroy();
	}

	public function ApplyChanges()
    {
		//Never delete this line!
		parent::ApplyChanges();

		$this->SetTimerInterval("UpdateTimer", $this->ReadPropertyInteger("Interval")*1000);

		$this->MaintainArray(self::$base);
		for ($i= 1; $i <= 12; $i++)
		{
            $this->MaintainArray (self::$values, $i, $i);
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
                $this->SendDebug("HEATCTRL " . $i, "Is in use: " . (string)$xml->Device->xpath('HEATCTRL[@nr=\'' . $i . '\']/INUSE')[0], 0);
                $HeatArea = (integer)$xml->Device->xpath('HEATCTRL[@nr=\'' . $i . '\']/HEATAREA_NR')[0];
 		        if ((integer)$xml->Device->xpath('HEATCTRL[@nr=\''.$i.'\']/INUSE')[0] == 1)
		        {
                    $this->SendDebug("HEATCTRL " . $i, "HeatArea: " . $HeatArea, 0);
                    $this->MaintainArray( self::$valuesHeatCtrlExt, $i, $HeatArea );
                    $this->SetValuesArray( self::$valuesHeatCtrlExt, $xml, $i, $HeatArea );
                }
            }
            $this->SendDebug("IO Device ", (integer) $xml->Device->IODEVICE->count(), 0);
		    for ($i=1; $i <= (integer) $xml->Device->IODEVICE->count(); $i++)
            {
                $HeatArea = (integer)$xml->Device->xpath('IODEVICE[@nr=\'' . $i . '\']/HEATAREA_NR')[0];
                $this->MaintainArray( self::$valuesIODevice, $i, $HeatArea );
                $this->SetValuesArray( self::$valuesIODevice, $xml, $i, $HeatArea );
            }
		}
		else
		{
            for ($i=1; $i <= 12; $i++)
            {
                $this->SendDebug("HEATCTRL " . $i, "Is in use: " . (string)$xml->Device->xpath( 'HEATCTRL[@nr=\'' . $i . '\']/INUSE' )[0], 0 );
                $HeatArea = (integer)$xml->Device->xpath('HEATCTRL[@nr=\'' . $i . '\']/HEATAREA_NR')[0];
                if ((integer)$xml->Device->xpath( 'HEATCTRL[@nr=\'' . $i . '\']/INUSE' )[0] == 1)
                {
                    $this->SendDebug("HEATCTRL " . $i, "HeatArea: " . $HeatArea, 0);
                    $this->MaintainArray( self::$valuesHeatCtrl, $i, $HeatArea );
                    $this->SetValuesArray( self::$valuesHeatCtrl, $xml, $i );
                }
            }
		}

	}

	private function MaintainArray($Array, $HeatNr = null, $HeatArea = null)
    {
        if ($HeatArea != null)
        {
            $Position = $HeatArea * 100;
        }
        else
        {
            $Position = 0;
        }
		foreach($Array as $key => $value)
		{
			if(!isset($value["Keep"]))
			{
				$keep = true;
			}
			else
			{
				$keep = $this->ReadPropertyBoolean(sprintf($value['Keep'], $HeatArea));
			}
			$this->MaintainVariable($this->ReduceToIdent(sprintf($key, $HeatNr)), sprintf($this->Translate( $value["Name"]), $HeatNr), $value["Type"], $value["Profile"], ($value["Position"] + $Position), $keep);

			if ($keep && $value["Action"])
			{
				$this->EnableAction($this->ReduceToIdent(sprintf($key, $HeatNr)));
			}
		}
	}

	private function SetValuesArray($Array, $Xml, $HeatNr = null, $HeatArea = null)
    {
		foreach($Array as $key => $value)
		{
			if(!isset($value["Keep"]))
			{
				$keep = true;
			}
			else
			{
				$keep = $this->ReadPropertyBoolean(sprintf($value['Keep'], $HeatArea));
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