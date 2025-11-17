<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARK ANGEL S. SARMIENTO | Ultra-Transparent Glass Portfolio</title>
    <style>
        /* SMOOTH SCROLLING ANIMATION */
        html {
            scroll-behavior: smooth;
        }

        /* BASE & TYPOGRAPHY - DARK MODE */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap');
        
        /* ACCENT COLOR: Light Blue */
        :root {
            --accent-color: #4A90E2; 
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: #121223; 
            color: #ffffff;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
            position: relative;
            z-index: 1;
        }
        
        h1 { font-size: 3.5em; font-weight: 800; }
        h2 { font-size: 2.2em; font-weight: 600; }
        h3 { font-size: 1.5em; font-weight: 600; }

        /* PREMIUM iOS LIQUID GLASS EFFECT */
        .liquid-glass-card {
            background: rgba(255, 255, 255, 0.02); 
            border-radius: 24px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3); 
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 40px;
            margin-bottom: 40px;
            transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
        }

        .liquid-glass-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.2);
        }

        /* Shine Effect inside the card */
        .liquid-glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.0) 70%);
            border-radius: 24px;
            pointer-events: none;
        }

        /* 1. HEADER & MAIN NAVIGATION */
        .header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(25px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .main-nav a {
            color: #ffffff; 
            text-decoration: none;
            margin-left: 25px;
            font-weight: 500; 
            transition: color 0.3s ease;
            /* REMOVED: text-transform: uppercase; */
            font-size: 0.9em;
        }

        .main-nav a:hover {
            color: var(--accent-color); 
        }

        /* 2. MOVED SOCIAL LINKS */
        .social-links-moved {
            text-align: center;
            padding: 20px 0 5px;
            margin-bottom: 20px;
        }
        .social-links-moved a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 400;
            opacity: 0.7;
            transition: opacity 0.3s, color 0.3s;
        }
        
        .social-links-moved a:hover {
            opacity: 1;
            color: var(--accent-color);
        }
        
        /* CONTENT STYLES */
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            padding-top: 10px;
            justify-content: flex-start; 
        }

        .skill-bubble {
            padding: 10px 20px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.05); 
            border: 1px solid rgba(255, 255, 255, 0.1);
            font-weight: 500;
        }
        
        .education-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); 
        }

        .education-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        /* Highlighting with new accent color */
        p strong {
            color: var(--accent-color); 
        }

        .education-item p:last-of-type {
            color: var(--accent-color); 
        }

        .award-item h3 {
            color: var(--accent-color); 
        }

        .award-item p {
            color: rgba(255, 255, 255, 0.7);
        }

        .award-item {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.1); 
        }
        .award-item:last-child {
            border-bottom: none;
        }

        .reference-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
            gap: 40px;
        }
        
        .reference-grid p {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .reference-grid p:nth-child(3), .reference-grid p:nth-child(4) {
            color: var(--accent-color); 
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="name">
            <h3 style="margin: 0; font-weight: 800;">Mark Angel S.Sarmiento</h3>
        </div>
        
        <nav class="main-nav">
            <a href="#education" title="Pumunta sa Educational Background">Educational Background</a> 
            <a href="#skills" title="Pumunta sa Skills and Abilities">Skills and Abilities</a>
            <a href="#personal-info" title="Pumunta sa Personal Information">Personal Information</a>
            <a href="#awards" title="Pumunta sa Certifications and Awards">Certifications and Awards</a>
            <a href="#references" title="Pumunta sa Character References">Character References</a>
        </nav>
    </header>

    <main class="container">
        
        <div class="social-links-moved">
            <a href="https://www.facebook.com/mangel.sarmiento.1" target="_blank" title="Facebook Profile">Facebook</a> | 
            <a href="https://www.instagram.com/markchiatt0/" target="_blank" title="Instagram Profile">Instagram</a> |
            <a href="https://github.com/m4rk06" target="_blank" title="GitHub Repository">GitHub</a>
        </div>
        
        <section class="hero" style="padding: 60px 0;">
            <div class="liquid-glass-card" style="text-align: center;">
                 <h2 style="margin-bottom: 15px; font-size: 2.5em; font-weight: 800;">CAREER OVERVIEW</h2>
                 
                 <p style="font-size: 1.2em; max-width: 900px; margin: 0 auto; font-weight: 400; line-height: 1.6;">
                    A **creative and detail-oriented UX/UI Designer** with a strong passion for crafting **intuitive, user-centered digital experiences.** Skilled in transforming complex ideas into clean, functional designs through wireframes, prototypes, and visually engaging interfaces. Experienced in using modern design tools such as **Figma, Adobe XD, and Sketch**, with a solid understanding of **user research, usability testing, and responsive design principles**. Demonstrates strong collaboration with developers and stakeholders to ensure seamless product delivery. Committed to creating designs that that are both beautiful and highly usable, enhancing user satisfaction and overall product performance.
                 </p>
            </div>
        </section>

        <section id="education" style="padding: 40px 0;">
            <h2>EDUCATIONAL BACKGROUND</h2>
            <div class="liquid-glass-card">
                
                <div class="education-item">
                    <h3 style="margin-top: 0;">City College of Angeles City, Pampanga</h3>
                    <p style="margin: 5px 0 0;">(Bachelor of Science in Computer Science (4 years))</p>
                    <p style="margin: 5px 0 0; font-weight: 600;">S.Y. 2025</p>
                </div>
                
                <div class="education-item">
                    <h3 style="margin-top: 0;">Francisco G. Nepomuceno Memorial High School (Senior High School)</h3>
                    <p style="margin: 5px 0 0;">Technical Vocational and Livelihood - **Computer System Servicing (CCS)**</p>
                    <p style="margin: 5px 0 0;">Citicenter, Pandan, Angeles City</p>
                    <p style="margin: 5px 0 0; font-weight: 600;">S.Y. 2023</p>
                </div>
                
                <div class="education-item">
                    <h3 style="margin-top: 0;">Francisco G. Nepomuceno Memorial High School (Junior High School)</h3>
                    <p style="margin: 5px 0 0;">Citicenter, Pandan, Angeles City</p>
                    <p style="margin: 5px 0 0; font-weight: 600;">S.Y. 2021</p>
                </div>
                
                <div class="education-item">
                    <h3 style="margin-top: 0;">Sto. Rosario Elementary School (Primary)</h3>
                    <p style="margin: 5px 0 0;">Sto Rosario, Angeles City</p>
                    <p style="margin: 5px 0 0; font-weight: 600;">S.Y. 2015</p>
                </div>
            </div>
        </section>

        
        <section id="skills" style="padding: 40px 0;">
            <h2>SKILLS AND ABILITIES</h2>
            <div class="liquid-glass-card">
                <div class="skills-container">
                    <span class="skill-bubble">Leadership</span>
                    <span class="skill-bubble">Management skills</span>
                    <span class="skill-bubble">Communication skills</span>
                    <span class="skill-bubble">Active listening</span>
                    <span class="skill-bubble">Adaptability</span>
                    <span class="skill-bubble">Time management</span>
                    <span class="skill-bubble">Work ethic</span>
                    <span class="skill-bubble">Creativity</span>
                    <span class="skill-bubble">Computer skills</span>
                    <span class="skill-bubble">Problem-solving</span>
                </div>
            </div>
        </section>

        <section id="personal-info" style="padding: 40px 0;">
            <h2>PERSONAL INFORMATION</h2>
            <div class="liquid-glass-card">
                <p><strong>Name:</strong> Mark Angel S. Sarmiento</p>
                <p><strong>Location:</strong> Lourdes Sur, Angeles City, Pampanga</p>
                <p style="margin-top: 15px;"><strong>Age:</strong> 23 years old</p>
                <p><strong>Birthday:</strong> November 06 2002</p>
                <p><strong>Sex:</strong> Male</p>
                <p><strong>Civil Status:</strong> Single</p>
            </div>
        </section>

        <section id="awards" style="padding: 40px 0;">
            <h2>CERTIFICATIONS AND AWARDS</h2>
            <div class="liquid-glass-card">
                
                <div class="award-item">
                    <h3 style="margin-top: 0;">Outstanding CSS Academic Performance</h3>
                    <p style="margin-top: 5px;">Academic Performance in Computer System Servicing during the First Semester for the School Year 2021-2022.</p>
                    <p style="font-size: 0.9em; color: rgba(255, 255, 255, 0.7);">**Given this 24th day of February 2022**</p>
                </div>

                <div class="award-item">
                    <h3 style="margin-top: 0;">With Honors (First Quarter S.Y. 2021-2022)</h3>
                    <p style="margin-top: 5px;">Outstanding Academic Performance in his/her class.</p>
                    <p style="font-size: 0.9em; color: rgba(255, 255, 255, 0.7);">**Given this 26th day of November 2021**</p>
                </div>
                
                <div class="award-item">
                    <h3 style="margin-top: 0;">With Honors (Second Quarter S.Y. 2021-2022)</h3>
                    <p style="margin-top: 5px;">Outstanding Academic Performance in his/her class.</p>
                    <p style="font-size: 0.9em; color: rgba(255, 255, 255, 0.7);">**Given this 24th day of February 2022**</p>
                </div>
                
                <div class="award-item">
                    <h3 style="margin-top: 0;">With Honors (Third Quarter S.Y. 2021-2022)</h3>
                    <p style="margin-top: 5px;">Outstanding Academic Performance in his/her class.</p>
                    <p style="font-size: 0.9em; color: rgba(255, 255, 255, 0.7);">**Given this 29th day of April 2022**</p>
                </div>
                
                <div class="award-item">
                    <h3 style="margin-top: 0;">With Honors (Fourth Quarter S.Y. 2021-2022)</h3>
                    <p style="margin-top: 5px;">Outstanding Academic Performance in his/her class.</p>
                    <p style="font-size: 0.9em; color: rgba(255, 255, 255, 0.7);">**Given this 6th day of July 2022**</p>
                </div>
                
                <div class="award-item">
                    <h3 style="margin-top: 0;">With Honors (2nd Quarter S.Y. 2022-2023)</h3>
                    <p style="margin-top: 5px;">In recognition of his/her outstanding academic performance with a general average of **91**.</p>
                </div>
                
                <div class="award-item">
                    <h3 style="margin-top: 0;">With Honors (3rd Quarter S.Y. 2022-2023)</h3>
                    <p style="margin-top: 5px;">In recognition of his/her outstanding academic performance with a general average of **90**.</p>
                </div>
                
                <div class="award-item">
                    <h3 style="margin-top: 0;">With Honors (4th Quarter S.Y. 2022-2023)</h3>
                    <p style="margin-top: 5px;">In recognition of his/her outstanding academic performance with a general average of **92**.</p>
                </div>
                
            </div>
        </section>
        
        <section id="references" style="padding: 40px 0 100px;">
            <h2>CHARACTER REFERENCES</h2>
            <div class="liquid-glass-card">
                <div class="reference-grid">
                    <div>
                        <h3 style="margin-top: 0;">Princess Joy Revilla</h3>
                        <p style="margin: 5px 0 0;">Teacher III</p>
                        <p style="margin: 5px 0 0;">princess.revilla@deped.gov.ph</p>
                    </div>
                    <div>
                        <h3 style="margin-top: 0;">Benjamin M. Tamayo</h3>
                        <p style="margin: 5px 0 0;">Master Teacher II</p>
                        <p style="margin: 5px 0 0;">benjamin.tamayo@deped.gov.ph</p>
                    </div>
                    <div>
                        <h3 style="margin-top: 0;">Roldan B. Casupanan</h3>
                        <p style="margin: 5px 0 0;">Secondary School Teacher</p>
                        <p style="margin: 5px 0 0;">No: **0905 578 7310**</p>
                        <p style="margin: 5px 0 0;">roldan.casupanan@deped.gov.ph</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    
    <footer style="text-align: center; padding: 30px 0; border-top: 1px solid rgba(255, 255, 255, 0.1); color: rgba(255, 255, 255, 0.5); font-size: 0.9em; background: transparent;">
        &copy; 2025 Mark Angel S. Sarmiento. Crafted with Ultra-Transparent Glass Precision.
    </footer>

</body>
</html>