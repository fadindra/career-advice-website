<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        // Load the Web driver
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        // BotMan configuration
        $config = [
            'web' => [
                'matchingData' => [
                    'driver' => 'web',
                ],
            ]
        ];

        // Create an instance of BotMan
        $botman = BotManFactory::create($config);

        // Handle incoming messages
        $botman->hears('{message}', function (BotMan $bot, $message) {
            // Get a response based on the message content
            $response = $this->getResponseBasedOnMessage($message);

            // Simulate typing delay
            $bot->typesAndWaits(2); // 2-second delay

            // Send the response
            $bot->reply($response);
        });

        // Start listening for messages
        $botman->listen();
    }

    /**
     * Get a response based on the message content.
     *
     * @param string $message
     * @return string
     */
    private function getResponseBasedOnMessage($message)
    {
        // Convert the message to lowercase for case-insensitive comparison
        $message = strtolower($message);

        // Determine the response based on the content of the message
        if (strpos($message, 'resume') !== false) {
            return 'Here are some tips for a great resume:<br>
                    1. Keep it concise and to the point.<br>
                    2. Highlight your most relevant experiences.<br>
                    3. Use action verbs and quantify your achievements.';
        } elseif (strpos($message, 'interview') !== false) {
            return 'Common interview questions include:<br>
                    1. Tell me about yourself.<br>
                    2. Why do you want to work here?<br>
                    3. What are your strengths and weaknesses?<br>
                    4. Can you describe a challenging situation and how you handled it?';
        } elseif (strpos($message, 'careers') !== false) {
            return 'Careers in demand currently include:<br>
                    1. Software Development<br>
                    2. Data Science<br>
                    3. Cybersecurity<br>
                    4. Healthcare professions<br>
                    5. Digital Marketing';
        } elseif (strpos($message, 'job search') !== false) {
            return 'Effective job search strategies include:<br>
                    1. Tailor your resume and cover letter for each job application.<br>
                    2. Use job boards and company websites.<br>
                    3. Network with professionals in your field.<br>
                    4. Prepare for interviews by researching the company and role.';
        } elseif (strpos($message, 'networking') !== false) {
            return 'Networking tips to build valuable connections:<br>
                    1. Attend industry events and conferences.<br>
                    2. Join professional associations and groups.<br>
                    3. Engage on LinkedIn and other social media platforms.<br>
                    4. Follow up with new connections and offer help where possible.';
        } elseif (strpos($message, 'skills development') !== false) {
            return 'To develop and enhance your skills:<br>
                    1. Take online courses and certifications.<br>
                    2. Attend workshops and seminars.<br>
                    3. Practice regularly and seek feedback.<br>
                    4. Stay updated with industry trends and technologies.';
        } elseif (strpos($message, 'career change') !== false) {
            return 'If you’re considering a career change:<br>
                    1. Identify your transferable skills and interests.<br>
                    2. Research the new field and its requirements.<br>
                    3. Network with professionals in the new industry.<br>
                    4. Consider additional education or training if necessary.';
        } elseif (strpos($message, 'work-life balance') !== false) {
            return 'To maintain a healthy work-life balance:<br>
                    1. Set clear boundaries between work and personal time.<br>
                    2. Prioritize self-care and leisure activities.<br>
                    3. Manage your time effectively.<br>
                    4. Communicate your needs with your employer.';
        } elseif (strpos($message, 'professional growth') !== false) {
            return 'For professional growth:<br>
                    1. Seek out mentorship and coaching.<br>
                    2. Take on challenging projects.<br>
                    3. Set career goals and track your progress.<br>
                    4. Continuously seek feedback and opportunities for improvement.';
        } elseif (strpos($message, 'hello') !== false || strpos($message, 'hi') !== false || strpos($message, 'hey') !== false) {
            return 'Hello! How can I assist you today?<br>
                    I am here to provide career advice and answer your questions.';
        } elseif (strpos($message, 'good morning') !== false) {
            return 'Good morning! How can I help you kickstart your day with some career advice?';
        } elseif (strpos($message, 'good afternoon') !== false) {
            return 'Good afternoon! Ready to tackle your career questions? I’m here to help!';
        } elseif (strpos($message, 'good evening') !== false) {
            return 'Good evening! How can I assist you with your career goals tonight?';
        } elseif (strpos($message, 'thank you') !== false || strpos($message, 'thanks') !== false) {
            return 'You’re welcome! If you have any more questions or need further assistance, feel free to ask.';
        } else {
            return 'I am here to assist you with career advice. Could you please provide more details or specify your query?';
        }
    }


}
