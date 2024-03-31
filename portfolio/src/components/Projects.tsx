import { useState } from 'react'

interface Project {
    name: string;
    description: string;
    image: string;
    link: string;
}
const Projects = () => {
    const [projects] = useState<Project[]>([
        {
            name: 'Weather Wizard',
            description: 'A magical application that fetches real-time weather data from a public API. It allows users to search for any city and displays the current weather, temperature, humidity, wind speed, and a 5-day forecast.',
            image: 'link_to_image_of_weather_wizard',
            link: 'link_to_weather_wizard'
        },
        {
            name: 'Recipe Reveler',
            description: 'A culinary application that helps users discover new recipes based on ingredients they have at home. It fetches data from a public API and displays the recipe name, ingredients, and step-by-step cooking instructions.',
            image: 'link_to_image_of_recipe_reveler',
            link: 'link_to_recipe_reveler'
        },
        {
            name: 'Budget Balancer',
            description: 'A financial application that empowers users to track their income and expenses effectively. It allows users to add transactions, calculate the total income, total expenses, and balance, and visualize their financial habits over time with a dynamic graph.',
            image: 'link_to_image_of_budget_balancer',
            link: 'link_to_budget_balancer'
        }
    ]);

    return (
        <div>
            <h1>Projects</h1>
            {projects.map((project) => (
                <div>
                    <h2>{project.name}</h2>
                    <p>{project.description}</p>
                    <img src={project.image} alt={project.name} />
                    <a href={project.link}>Link</a>
                </div>
            ))}
        </div>
    )
}

export default Projects