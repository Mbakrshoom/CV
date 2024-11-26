<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContrller extends Controller
{
    public function about()
    {
        $personalData = [
            'name' => 'Mohammed Aseel Bakrshoom',
            'birthday' => '10 September 2003',
            'website' => 'https://github.com/Mbakrshoom',
            'phone' => '+967 776152554',
            'city' => 'Al-mukla, Yemen',
            'age' => 21,
            'degree' => 'Bachelors',
            'email' => 'mbakrshoom6@gmail.com',
        ];

        $skills = [
            ['name' => 'HTML', 'level' => 70],
            ['name' => 'CSS', 'level' => 60],
            ['name' => 'JavaScript', 'level' => 50],
            ['name' => 'PHP', 'level' => 80],
            ['name' => 'C Sharp', 'level' => 90],
            ['name' => 'Flutter', 'level' => 75],
        ];

        return view('about', compact('personalData', 'skills'));
    }
    public function resume()
    {
        $summary = [
            'name' => 'Mohammed Bakrshoom',
            'description' => 'Innovative and deadline-driven Application developer with X years of experience developing applications from initial concept to final, polished deliverable.',
            'contact' => [
                'phone' => '+966 776152554',
                'email' => 'mbakrshoom6@gmail.com',
            ],
        ];

        $education = [
            [
                'degree' => 'Bachelor of Information Technology',
                'years' => '2021 - 2025',
                'institution' => 'Al-Rayan University',
            ],
            [
                'degree' => 'High School',
                'years' => '2018 - 2020',
                'institution' => 'Martyr Salem Ali Al-Kindi School, Al-Hajlin, Al-Dulaia',
            ],
        ];

        $experience = [
            [
                'title' => 'Application developer specialist',
                'years' => '2024 - Present',
                'company' => 'Experion, AL-mukla',
                'responsibilities' => [
                    'Proficient in multiple programming languages and frameworks, with a focus on [specific technologies or platforms].',
                    'Skilled in full software development lifecycle, from requirement analysis to testing and deployment.',
                    'Innovative problem-solving and attention to detail.',
                ],
            ],
            [
                'title' => 'Graphic design specialist',
                'years' => 'In the future',
                'company' => 'Experion, AL-mukla',
                'responsibilities' => [
                    'Creating visually stunning and impactful designs across various platforms.',
                    'Proficient in Adobe Creative Suite and other industry-standard software.',
                    'Adept at translating client briefs into compelling visual concepts.',
                    'Able to effectively liaise with clients and stakeholders to ensure project success.',
                ],
            ],
        ];

        return view('resume', compact('summary', 'education', 'experience'));
    }
    public function projectDetails()
    {
        $projects = [
            [
                'category' => 'Desktop APP',
                'client' => 'Future Pioneers School',
                'date' => '01 March, 2023',
                'url' => 'https://github.com/Mbakrshoom/School_management',
                'images' => [
                    'assets/img/portfolio/home.png',
                    'assets/img/portfolio/student_page.png',
                    'assets/img/portfolio/marks_page.png',
                ],
            ],
            [
                'category' => 'Website',
                'client' => 'University',
                'date' => '01 March, 2023',
                'url' => 'https://github.com/Mbakrshoom/University_website',
                'images' => [
                    'assets/img/portfolio/homepage.png',
                    'assets/img/portfolio/pages.png',
                    'assets/img/portfolio/pa.png',
                ],
            ],
            [
                'category' => 'System_Analysis',
                'client' => 'Bank Management',
                'date' => '01 March, 2023',
                'url' => 'https://github.com/Mbakrshoom/System_analysis_of_bank_managemnt',
                'images' => [
                    'assets/img/portfolio/usecase.png',
                    'assets/img/portfolio/DFD.png',
                    'assets/img/portfolio/ERd.png',
                ],
            ],
            [
                'category' => 'Design',
                'client' => 'Furniture',
                'date' => '01 March, 2023',
                'url' => 'https://github.com/Mbakrshoom/Furniture_adobeXd',
                'images' => [
                    'assets/img/portfolio/log.png',
                    'assets/img/portfolio/h.png',
                    'assets/img/portfolio/de.png',
                ],
            ],
        ];

        return view('projects', compact('projects'));
    }
    public function index()
    {
        $data = [
            'name' => 'Mohammed Bakrshoom',
            'roles' => ['Designer', 'Developer', 'Freelancer']
        ];

        return view('home', compact('data'));
    }

}
