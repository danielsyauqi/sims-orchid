<?php

namespace App\Orchid\Layouts\Assessment;

class ThreatGroupOptions
{
    /**
     * Get threat group options.
     *
     * @return array
     */
    public static function getThreatGroupOptions(?string $vulnerabilityType): array
    {
        switch ($vulnerabilityType) {
            case 'T1 Force Majeure':
                return [
                    'T1.1 Lightning' => 'T1.1 Lightning',
                    'T1.2 Fire' => 'T1.2 Fire',
                    'T1.3 Water' => 'T1.3 Water',
                    'T1.4 Dust, soiling' => 'T1.4 Dust, soiling',
                    'T1.5 Inadmissible temperature and humidity' => 'T1.5 Inadmissible temperature and humidity',
                    'T1.6 Power failure' => 'T1.6 Power failure',
                    'T1.7 Catastrophes in the environment' => 'T1.7 Catastrophes in the environment',
                    'T1.8 Loss of personnel' => 'T1.8 Loss of personnel',
                    'T1.9 Failure of the IT system' => 'T1.9 Failure of the IT system',
                    'T1.10 Burning cables' => 'T1.10 Burning cables',
                    'T1.11 Loss of data due to intensive magnetic fields' => 'T1.11 Loss of data due to intensive magnetic fields',
                    'T1.12 Problems caused by big public events' => 'T1.12 Problems caused by big public events',
                    'T1.13 Storms' => 'T1.13 Storms',
                    'T1.14 Drought' => 'T1.14 Drought',
                    'T1.15 Earthquake' => 'T1.15 Earthquake',
                    'T1.16 Subsidence and landslides' => 'T1.16 Subsidence and landslides',
                    'T1.17 Epidemic' => 'T1.17 Epidemic',
                    'T1.18 Hazardous/ Malicious animal (Vermin)' => 'T1.18 Hazardous/ Malicious animal (Vermin)',
                    'T1.19 Flash flood' => 'T1.19 Flash flood',
                    'T1.20 Haze' => 'T1.20 Haze',
                    'T1.21 Monsoon' => 'T1.21 Monsoon',
                    'T1.22 Tsunami' => 'T1.22 Tsunami',
                    'T1.23 Volcanic eruption' => 'T1.23 Volcanic eruption',
                ];
            case 'T2 Deliberate Act':
                return [
                   'T2.1 Malicious software (Malware)' => 'T2.1 Malicious software (Malware)',
                    'T2.2 Denial of service (DOS)' => 'T2.2 Denial of service (DOS)',
                    'T2.3 Loss, destruction, disclosure and falsification of sensitive organisational records/ information' => 'T2.3 Loss, destruction, disclosure and falsification of sensitive organisational records/ information',
                    'T2.4 Theft' => 'T2.4 Theft',
                    'T2.5 Misuse of user & administrator rights' => 'T2.5 Misuse of user & administrator rights',
                    'T2.6 Unauthorized access to information processing facilities & operating system' => 'T2.6 Unauthorized access to information processing facilities & operating system',
                    'T2.7 Unauthorized physical entry into building/ secure area' => 'T2.7 Unauthorized physical entry into building/ secure area',
                    'T2.8 Misuse of resources' => 'T2.8 Misuse of resources',
                    'T2.9 Spamming' => 'T2.9 Spamming',
                    'T2.10 Manipulation & destruction of IT equipment or accessories' => 'T2.10 Manipulation & destruction of IT equipment or accessories',
                    'T2.11 Manipulation of data or software' => 'T2.11 Manipulation of data or software',
                    'T2.12 Unauthorized entry into building' => 'T2.12 Unauthorized entry into building',
                    'T2.13 Vandalism' => 'T2.13 Vandalism',
                    'T2.14 Attack' => 'T2.14 Attack',
                    'T2.15 Interception of lines' => 'T2.15 Interception of lines',
                    'T2.16 Manipulation of lines' => 'T2.16 Manipulation of lines',
                    'T2.17 Unauthorized use of IT system' => 'T2.17 Unauthorized use of IT system',
                    'T2.18 Abuse of remote maintenance ports' => 'T2.18 Abuse of remote maintenance ports',
                    'T2.19 Interception of telephone calls and data transmissions' => 'T2.19 Interception of telephone calls and data transmissions',
                    'T2.20 Eavesdropping of rooms' => 'T2.20 Eavesdropping of rooms',
                    'T2.21 Call charges fraud' => 'T2.21 Call charges fraud',
                    'T2.22 "Inquisitive" staff members' => 'T2.22 "Inquisitive" staff members',
                    'T2.23 Threat posed by internal staff during maintenance or administration work' => 'T2.23 Threat posed by internal staff during maintenance or administration work',
                    'T2.24 Threat posed by external staff during maintenance work' => 'T2.24 Threat posed by external staff during maintenance work',
                    'T2.25 Systematic trying-out of passwords' => 'T2.25 Systematic trying-out of passwords',
                    'T2.26 Abuse of user rights' => 'T2.26 Abuse of user rights',
                    'T2.27 Misuse of administrator rights' => 'T2.27 Misuse of administrator rights',
                    'T2.28 Trojan horses' => 'T2.28 Trojan horses',
                    'T2.29 Theft in the case of mobile uses IT systems' => 'T2.29 Theft in the case of mobile uses IT systems',
                    'T2.30 Computer viruses' => 'T2.30 Computer viruses',
                    'T2.31 Replay of messages' => 'T2.31 Replay of messages',
                    'T2.32 Masquerade' => 'T2.32 Masquerade',
                    'T2.33 Analysis of message flow' => 'T2.33 Analysis of message flow',
                    'T2.34 Repudiation of a message' => 'T2.34 Repudiation of a message',
                    'T2.35 Unauthorized copying of data media' => 'T2.35 Unauthorized copying of data media',
                    'T2.36 Unauthorized use of fax machines' => 'T2.36 Unauthorized use of fax machines',
                    'T2.37 Unauthorized viewing of incoming fax messages' => 'T2.37 Unauthorized viewing of incoming fax messages',
                    'T2.38 Evaluation of residual information in fax machines' => 'T2.38 Evaluation of residual information in fax machines',
                    'T2.39 Impersonating wrong senders on fax machines' => 'T2.39 Impersonating wrong senders on fax machines',
                    'T2.40 Deliberate reprogramming of the destination keys on fax machines' => 'T2.40 Deliberate reprogramming of the destination keys on fax machines',
                    'T2.41 Overloading by incoming fax messages' => 'T2.41 Overloading by incoming fax messages',
                    'T2.42 Deliberate overloading of answering machines' => 'T2.42 Deliberate overloading of answering machines',
                    'T2.43 Determining access codes' => 'T2.43 Determining access codes',
                    'T2.44 Misuse of remote inquiry' => 'T2.44 Misuse of remote inquiry',
                    'T2.45 Infiltrating computer system via communication cards' => 'T2.45 Infiltrating computer system via communication cards',
                    'T2.46 Monitoring rooms using computers equipped with microphones' => 'T2.46 Monitoring rooms using computers equipped with microphones',
                    'T2.47 Social engineering' => 'T2.47 Social engineering',
                    'T2.48 Macro viruses' => 'T2.48 Macro viruses',
                    'T2.49 Abuse of remote access ports for management functions of Private Branch Exchanges' => 'T2.49 Abuse of remote access ports for management functions of Private Branch Exchanges',
                    'T2.50 Abuse of routing protocols' => 'T2.50 Abuse of routing protocols',
                    'T2.51 Deliberate misuse of protective cabinets for reasons of convenience' => 'T2.51 Deliberate misuse of protective cabinets for reasons of convenience',
                    'T2.52 By-passing systems guidelines' => 'T2.52 By-passing systems guidelines',
                    'T2.53 Misuse of remote access to management functions on routers' => 'T2.53 Misuse of remote access to management functions on routers',
                    'T2.54 Misuse of resource via remote IT systems' => 'T2.54 Misuse of resource via remote IT systems',
                    'T2.55 Manipulation of data or software in database systems' => 'T2.55 Manipulation of data or software in database systems',
                    'T2.56 Unauthorized connection of IT systems to a network' => 'T2.56 Unauthorized connection of IT systems to a network',
                    'T2.57 Unauthorized execution of network managements functions' => 'T2.57 Unauthorized execution of network managements functions',
                    'T2.58 Unauthorized access to active network components' => 'T2.58 Unauthorized access to active network components',
                    'T2.59 Higher risk of theft from a working place at home' => 'T2.59 Higher risk of theft from a working place at home',
                    'T2.60 Manipulation by family members or visitors' => 'T2.60 Manipulation by family members or visitors',
                    'T2.61 Loss of confidentiality of classified information' => 'T2.61 Loss of confidentiality of classified information',
                    'T2.62 Misuse of email services' => 'T2.62 Misuse of email services',
                    'T2.63 Impersonation of a sender' => 'T2.63 Impersonation of a sender',
                    'T2.64 Manipulation of alias files and distribution lists' => 'T2.64 Manipulation of alias files and distribution lists',
                    'T2.65 Overload due to incoming e-mail' => 'T2.65 Overload due to incoming e-mail',
                    'T2.66 Mail bombs' => 'T2.66 Mail bombs',
                    'T2.67 Unauthorized monitoring of e-mails' => 'T2.67 Unauthorized monitoring of e-mails',
                    'T2.68 Hoaxes' => 'T2.68 Hoaxes',
                    'T2.69 Unauthorized use of a crypto module' => 'T2.69 Unauthorized use of a crypto module',
                    'T2.70 Manipulation of a crypto module' => 'T2.70 Manipulation of a crypto module',
                    'T2.71 Compromising cryptographic codes' => 'T2.71 Compromising cryptographic codes',
                    'T2.72 Forged certificates' => 'T2.72 Forged certificates',
                    'T2.73 Loss of integrity of information that should be protected' => 'T2.73 Loss of integrity of information that should be protected',
                    'T2.74 Manipulation of management parameters' => 'T2.74 Manipulation of management parameters',
                    'T2.75 Misuse of active contents' => 'T2.75 Misuse of active contents',
                    'T2.76 Hijacking of network connections' => 'T2.76 Hijacking of network connections',
                    'T2.77 Manipulation of address books and distribution lists' => 'T2.77 Manipulation of address books and distribution lists',
                    'T2.78 Misuse of cards' => 'T2.78 Misuse of cards',
                    'T2.79 Bugging of indoor conversations over mobile phones' => 'T2.79 Bugging of indoor conversations over mobile phones',
                    'T2.80 Tampering of mobile phones' => 'T2.80 Tampering of mobile phones',
                    'T2.81 Unauthorized transfer of data over mobile phones' => 'T2.81 Unauthorized transfer of data over mobile phones',
                    'T2.82 Interception of mobile telephone calls' => 'T2.82 Interception of mobile telephone calls',
                    'T2.83 Analysis of call data relating to the use of mobile phones' => 'T2.83 Analysis of call data relating to the use of mobile phones',
                    'T2.84 Sabotage' => 'T2.84 Sabotage',
                ];
            case 'T3 Human Error' :
                return [
                    'T3.1 Personnel is not competent' => 'T3.1 Personnel is not competent',
                    'T3.2 Software malfunctions/ security incidents/ weaknesses are not reported' => 'T3.2 Software malfunctions/ security incidents/ weaknesses are not reported',
                    'T3.3 Carelessness/ negligence in handling information and operating the IT system' => 'T3.3 Carelessness/ negligence in handling information and operating the IT system',
                    'T3.4 Non-compliant with IT security measures, standards and policy' => 'T3.4 Non-compliant with IT security measures, standards and policy',
                    'T3.5 Loss of data confidentiality/ integrity as a result of IT user error' => 'T3.5 Loss of data confidentiality/ integrity as a result of IT user error',
                    'T3.6 Inadmissible connection of cables' => 'T3.6 Inadmissible connection of cables',
                    'T3.7 Inadvertent damaging of cables' => 'T3.7 Inadvertent damaging of cables',
                    'T3.8 Hazards posed by cleaning staff or outside staff' => 'T3.8 Hazards posed by cleaning staff or outside staff',
                    'T3.9 Improper use of the IT system' => 'T3.9 Improper use of the IT system',
                    'T3.10 Improper IT system administration' => 'T3.10 Improper IT system administration',
                    'T3.11 Improper configuration of send mail' => 'T3.11 Improper configuration of send mail',
                    'T3.12 Loss of data media during transfer' => 'T3.12 Loss of data media during transfer',
                    'T3.13 Transfer of incorrect or undesired data records' => 'T3.13 Transfer of incorrect or undesired data records',
                    'T3.14 Misjudgement of the legally binding of a fax' => 'T3.14 Misjudgement of the legally binding of a fax',
                    'T3.15 Improper use of answering machines' => 'T3.15 Improper use of answering machines',
                    'T3.16 Incorrect administration of site and data access rights' => 'T3.16 Incorrect administration of site and data access rights',
                    'T3.17 Incorrect change of PC users' => 'T3.17 Incorrect change of PC users',
                    'T3.18 Sharing of directories, printers or of the clipboard' => 'T3.18 Sharing of directories, printers or of the clipboard',
                    'T3.19 Improper use of code keys' => 'T3.19 Improper use of code keys',
                    'T3.20 Inadvertent manipulation of data' => 'T3.20 Inadvertent manipulation of data',
                    'T3.21 Inadequate configuration of active network components' => 'T3.21 Inadequate configuration of active network components',
                    'T3.22 Lack of, or unsuitable segmentation' => 'T3.22 Lack of, or unsuitable segmentation',
                    'T3.23 Unauthorized private use of telecommuting workstations' => 'T3.23 Unauthorized private use of telecommuting workstations',
                    'T3.24 Unstructured data organization' => 'T3.24 Unstructured data organization',
                    'T3.25 Violation of basic legal conditions for the use of cryptographic procedures' => 'T3.25 Violation of basic legal conditions for the use of cryptographic procedures',
                    'T3.26 Unsuitable configuration of the management system' => 'T3.26 Unsuitable configuration of the management system',
                    'T3.27 Disabling the server while in operation' => 'T3.27 Disabling the server while in operation',
                    'T3.28 Mis-interpretation of events' => 'T3.28 Mis-interpretation of events',
                    'T3.29 Unproductive searches' => 'T3.29 Unproductive searches',
                    'T3.30 Errors in configuration and operation' => 'T3.30 Errors in configuration and operation',
                    'T3.31 Improper use of remote access services' => 'T3.31 Improper use of remote access services',
                    'T3.32 Inappropriate handling of passwords' => 'T3.32 Inappropriate handling of passwords',
                    'T3.33 Inadequate checking of the identity of communication partners' => 'T3.33 Inadequate checking of the identity of communication partners',
                ];
            case 'T4 Technical Failure' :
                return [
                    'T4.1 Software malfunctions' => 'T4.1 Software malfunctions',
                    'T4.2 Hardware malfunctions' => 'T4.2 Hardware malfunctions',
                    'T4.3 Failure of a local area network or wide area network (LAN and WAN)' => 'T4.3 Failure of a local area network or wide area network (LAN and WAN)',
                    'T4.4 Disruption of power supply' => 'T4.4 Disruption of power supply',
                    'T4.5 Failure of internal supply networks' => 'T4.5 Failure of internal supply networks',
                    'T4.6 Inoperability of existing safeguards' => 'T4.6 Inoperability of existing safeguards',
                    'T4.7 Impairment of lines due to environmental factors' => 'T4.7 Impairment of lines due to environmental factors',
                    'T4.8 Cross-talk' => 'T4.8 Cross-talk',
                    'T4.9 Voltage variations/ overvoltage & undervoltage' => 'T4.9 Voltage variations/ overvoltage & undervoltage',
                    'T4.10 Defective data media' => 'T4.10 Defective data media',
                    'T4.11 Discovery of software vulnerabilities' => 'T4.11 Discovery of software vulnerabilities',
                    'T4.12 Disruption of the internal power supply' => 'T4.12 Disruption of the internal power supply',
                    'T4.13 Complexity of access possibilities to networked IT systems' => 'T4.13 Complexity of access possibilities to networked IT systems',
                    'T4.14 Sending a fax message to a wrong recipient due to misconnection' => 'T4.14 Sending a fax message to a wrong recipient due to misconnection',
                    'T4.15 Fax transmission errors' => 'T4.15 Fax transmission errors',
                    'T4.16 Technical defects on fax machines' => 'T4.16 Technical defects on fax machines',
                    'T4.17 Information loss due to exhausted storage medium' => 'T4.17 Information loss due to exhausted storage medium',
                    'T4.18 Data loss due to exhausting storage medium' => 'T4.18 Data loss due to exhausting storage medium',
                    'T4.19 Transient currents on shielding' => 'T4.19 Transient currents on shielding',
                    'T4.20 Software vulnerabilities or errors' => 'T4.20 Software vulnerabilities or errors',
                    'T4.21 Automatic CD-ROM recognition' => 'T4.21 Automatic CD-ROM recognition',
                    'T4.22 Still active connections' => 'T4.22 Still active connections',
                    'T4.23 Failure of a database' => 'T4.23 Failure of a database',
                    'T4.24 Loss of data in a database' => 'T4.24 Loss of data in a database',
                    'T4.25 Loss of data in a database caused by a lack of storage space' => 'T4.25 Loss of data in a database caused by a lack of storage space',
                    'T4.26 Loss of database integrity/ consistency' => 'T4.26 Loss of database integrity/ consistency',
                    'T4.27 Failure or malfunction of a network component' => 'T4.27 Failure or malfunction of a network component',
                    'T4.28 Failure to dispatch a message' => 'T4.28 Failure to dispatch a message',
                    'T4.29 Poor-quality or missing authentication' => 'T4.29 Poor-quality or missing authentication',
                    'T4.30 Failure of a cryptomodule' => 'T4.30 Failure of a cryptomodule',
                    'T4.31 Insecure cryptographic algorithms' => 'T4.31 Insecure cryptographic algorithms',
                    'T4.32 Mistakes in encoded data' => 'T4.32 Mistakes in encoded data',
                    'T4.33 Lack of time authenticity in e-mail' => 'T4.33 Lack of time authenticity in e-mail',
                    'T4.34 Failure of components of a network management system or system management system' => 'T4.34 Failure of components of a network management system or system management system',
                    'T4.35 Software conception errors' => 'T4.35 Software conception errors',
                    'T4.36 Non-availability of the mobile communication network' => 'T4.36 Non-availability of the mobile communication network',
                    'T4.37 Failure of the mobile phone' => 'T4.37 Failure of the mobile phone',
                    'T4.38 Undocumented functions' => 'T4.38 Undocumented functions',
                ];
                

        default:
            return ['' => 'Choose vulnerability type'];
        }

    }
}
