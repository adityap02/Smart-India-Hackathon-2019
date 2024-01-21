# Healthcare Data Management and Analysis System For ASHA Healthcare Workers

## Overview
This project was developed as a part of the Smart India Hackathon 2019 and won under the Healthcare department. It is designed to facilitate efficient data management and analysis within healthcare settings, leveraging a robust backend database and user interface to enhance interaction between patients and doctors with the help of healthcare workers (ASHA).

## Features
- Patient Management: Handle personal and medical information of patients securely.
- Healthcare Worker Access: Enable ASHAs to access and update patient data.
- Doctor Coordination: Allow doctors to review and update medical records.
- Medical Data Tracking: Record and track updated medical information over time.

## System Architecture
Refer to the UML diagram (Uml.png) for an overview of the database structure, which outlines the relationships between ASHA, , DOCTOR, MEDICAL INFO, and UPDATED MEDICAL INFO entities.

## Getting Started
### Prerequisites
- PHP 7.2 or higher
- MySQL 5.7 or higher
- Apache server

### Setup
Set up the PHP environment, import the SQL dump (`sih.sql`), and configure the application

## Usage
Step-by-step guide on how to use the system including:
- Registration and login procedures for patients, doctors, and ASHAs.
- Navigating through the system to access and update medical records.
- There are altogether two web portals, 1. Asha Members 2. Doctors.
- Both the web portals are multilingual and can be accessed by hosting the php application and the provided sql dump file on any web server (Xampp/Wampp Preffered for local machine). 

## Code Organization
Description of the directory structure and main files:
- `asha`: Scripts for ASHA's interactions with the system.
- `doctor`: Functionality specific to doctor roles.
- `index.php`: The main entry point to the web application.

## Database Setup
Detailed instructions for setting up the database using the provided SQL dump, along with an explanation of the schema based on the UML diagram.

## Supporting Documents
[PPT](Docs/SIH.pptx)

[UML Diagram](Docs/Uml.png)

## Contributing
Contributions to improve this project are highly appreciated. Please refer to [CONTRIBUTING.md](CONTRIBUTING.md) for contribution guidelines.

## License
This project is licensed under the MIT License - see [LICENSE.md](LICENSE.md) for details.

## Acknowledgements
Special thanks to the team members, Flucon, and the Smart India Hackathon organizers for their support and opportunity.
