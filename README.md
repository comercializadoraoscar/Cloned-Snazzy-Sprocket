# Snazzy Sprocket Agency Site 🚀

## Project Overview
This project is a high-performance, custom-built WordPress site for **Snazzy Sprocket**, a fictional design and development agency. Developed as part of the Software Engineer Assessment for **Happy Cog**, the site demonstrates a robust CMS architecture, a strictly custom Tailwind CSS-integrated theme, and a sophisticated AI-assisted development workflow.

The objective was to transform provided Figma designs into a fully functional, multi-page professional site within a 2-5 hour window, ensuring mobile responsiveness and a polished author experience.

---

## Key Features
**Custom CMS Architecture:** Implementation of a dedicated "Case Studies" Custom Post Type (CPT) with structured taxonomies for 'Industry' and 'Technology'.
**Dynamic Work Gallery:** A functional listing page featuring frontend filters to allow users to sort projects by their respective categories.
***Enhanced Author Experience (AX):** Integration of custom fields (ACF) and Gutenberg to empower content editors to manage agency narratives and the 10-member team section without modifying code.
***Tailwind Proficiency:** A mobile-first, utility-first styling approach that ensures a lean CSS footprint and visual fidelity to the brand's design system
***Technical Foundation:** Built on the latest version of WordPress using a "Strictly Custom" theme approach, avoiding restrictive page builders.

---

## AI-Driven Development & Orchestration
[cite_start]This project was developed using a "Human-in-the-loop" AI workflow, leveraging a cutting-edge stack of generative and agentic tools to accelerate delivery while maintaining senior-level engineering standards.

### My AI Stack:
* **Google AI Ecosystem:** Utilized **Gemini** and **Gemini CLI** for high-level architectural brainstorming, logic validation, and technical documentation.
* **Orchestration & Agents:** Employed **AntiGravity** as the primary orchestration layer to manage local agentic tasks, alongside **Jules** for specialized code analysis and refactoring.

### Strategic Implementation:
***Scaffolding:** Accelerated the creation of PHP CPT registrations, taxonomies, and ACF field groups.
***Optimization:** Refined complex `WP_Query` logic for project filtering and optimized Tailwind configuration for production.
***Verification:** Every AI-generated component was manually audited for performance, security, and adherence to WordPress Coding Standards (WPCS).

---

## Technical Stack
* **Backend:** WordPress (PHP)
* **Frontend:** Tailwind CSS
* **Environment:** Docker-based local development (Docker Compose)
* **Data Layer:** Custom Post Types, Taxonomies, and ACF

---

## Getting Started
1.  **Clone the repository.**
2.  **Ensure Docker is running.**
3.  **Run the containers:** ```bash
    docker compose up -d --build
    ```
    *(Note: The database will automatically seed on the first run using the included `init.sql` file).*
4.  **Access the frontend:** Navigate to `http://localhost:8081`.
5.  **Access the WordPress Admin:** Navigate to `http://localhost:8081/wp-admin`.
