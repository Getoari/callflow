
---

## AI_USAGE.md

Create:

```md
# AI Usage

## Tools Used

- ChatGPT


## Purpose

AI was used as a development assistant during the implementation of the CallFlow CRM application.

The goal was to improve productivity while still making and reviewing all engineering decisions manually.


---

# AI Assisted Areas

AI was used for:

- Brainstorming application architecture
- Suggesting database structure
- Generating initial Laravel boilerplate
- Reviewing code organization
- Improving documentation wording


Examples:

- Database model suggestions
- Controller structure suggestions
- README structure
- Technical decision explanations


---

# Manual Review

All AI-generated suggestions were reviewed manually.

I verified:

- Laravel conventions
- Database relationships
- Validation rules
- Business logic
- Application flow


Code was adapted where needed to fit the project requirements.


---

# Accepted Suggestions

Accepted:

- Using a service class for lead scoring
- Separating business logic from controllers
- Using Inertia with Vue for faster development


Reasons:

These approaches improve maintainability and keep the application simple.


---

# Rejected Suggestions

Rejected:

- Over-engineered architecture
- Microservices
- Complex infrastructure


Reasons:

The assignment was timeboxed and did not require production-scale infrastructure.

A simple monolithic application was more appropriate.


---

# Reflection

AI was used as a productivity tool, not as a replacement for engineering decisions.

The final implementation decisions were based on:

- Project requirements
- Time constraints
- Maintainability
- Simplicity