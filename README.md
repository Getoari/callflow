# CallFlow CRM

A lightweight Call Center Workspace for managing leads, prioritizing opportunities, and tracking sales workflows.

Built as part of the TRE+ Engineering Assessment.

---

# Features

## Lead Scoring

Each lead receives a score from 0-100 based on lead quality indicators.

Scoring rules:

- Company provided: +20
- Email provided: +10
- Phone provided: +10
- Opportunity value >= €10,000: +30
- Existing contact history: +20

Lead classification:

- 80-100: Hot
- 50-79: Warm
- 0-49: Cold


## CRM Management

Users can manage:

- First name
- Last name
- Company
- Email
- Phone
- Notes
- Opportunity value
- Status
- Lead temperature
- Last contact date


## Call Workflow

Leads move through a sales pipeline:

New
↓
Contacted
↓
Follow-up Required
↓
Qualified
↓
Won / Lost


---

# Technology Stack

## Backend

- Laravel
- PHP
- SQLite


## Frontend

- Vue 3
- Inertia.js
- Tailwind CSS
- Vite


---

# Setup

## Requirements

- PHP 8.2+
- Composer
- Node.js
- NPM


## Installation

Clone the repository:

```bash
git clone <repository-url>

cd callflow