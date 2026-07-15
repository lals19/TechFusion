-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2026 at 09:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techfusion_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `news_id`, `comment`) VALUES
(1, 1, 'wow'),
(2, 1, 'wow');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `news_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`) VALUES
(1, 'EU Approves New AI Rules With Delayed Enforcement', '1. EU Approves New AI Rules With Delayed Enforcement\r\nThe European Union has reached a provisional agreement on updated AI regulations. The new rules delay enforcement for high-risk AI systems until late 2027 while introducing mandatory watermarking for AI-generated content and banning non-consensual AI deepfakes. Experts say the move balances innovation with safety concerns. ', 'images/aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `title`, `content`, `image`) VALUES
(1, 'Beginner Guide To Cybersecurity', ' How to Stay Safe Online\r\nIntroduction\r\nCybersecurity is the practice of protecting computers, mobile phones, networks, and personal information from hackers and cyberattacks. As technology continues to grow, online security has become more important than ever. This tutorial explains simple ways anyone can stay safe while using the internet.\r\n1. Create Strong Passwords\r\nOne of the easiest ways hackers access accounts is through weak passwords.\r\nTips for Strong Passwords:\r\nUse at least 12 characters\r\nCombine uppercase and lowercase letters\r\nAdd numbers and symbols\r\nAvoid using birthdays or names\r\nUse different passwords for different accounts\r\nExample:\r\n❌ weakpassword123\r\n✅ T3ch$afe2026!\r\n2. Enable Two-Factor Authentication (2FA)\r\nTwo-factor authentication adds an extra layer of security. Even if someone knows your password, they still need a second verification code to access your account.\r\nCommon 2FA Methods:\r\nSMS verification code\r\nAuthentication apps\r\nFingerprint or face recognition\r\n3. Be Careful With Suspicious Links\r\nHackers often send fake emails or messages that look real.\r\nWarning Signs:\r\nStrange website URLs\r\nMessages asking for passwords\r\nUrgent requests like “Your account will be deleted”\r\nUnknown attachments\r\nTip:\r\nAlways verify links before clicking.\r\n4. Keep Software Updated\r\nUpdates fix security vulnerabilities in apps and operating systems.\r\nAlways Update:\r\nWindows or macOS\r\nAndroid or iPhone software\r\nBrowsers\r\nAntivirus programs\r\n5. Use Antivirus Software\r\nAntivirus programs help detect and remove harmful software such as viruses and malware.\r\nPopular Antivirus Programs:\r\nWindows Defender\r\nAvast\r\nBitdefender\r\nKaspersky\r\n6. Avoid Public Wi-Fi Risks\r\nPublic Wi-Fi networks can be dangerous because hackers may intercept data.\r\nSafety Tips:\r\nAvoid online banking on public Wi-Fi\r\nUse a VPN if possible\r\nTurn off automatic Wi-Fi connections\r\n7. Backup Important Data\r\nAlways keep backups of important files in case of cyberattacks or device failure.\r\nBackup Options:\r\nExternal hard drives\r\nCloud storage\r\nUSB flash drives\r\nConclusion\r\nCybersecurity is essential in today’s digital world. By using strong passwords, enabling two-factor authentication, updating software, and staying alert online, users can protect themselves from many common cyber threats. Small security habits can make a huge difference in keeping personal information safe.\r\nQuick Cybersecurity Tips\r\n✔ Never share passwords\r\n✔ Update devices regularly\r\n✔ Avoid suspicious downloads\r\n✔ Use trusted websites only\r\n✔ Enable 2FA whenever possible', 'images/bb.jpg'),
(2, 'What Is Artificial Intelleigence', 'Artificial Intelligence, commonly called AI, is a technology that allows computers and machines to perform tasks that normally require human intelligence. AI can learn from data, recognize patterns, solve problems, and even communicate with people.\r\nToday, AI is used in smartphones, social media, online shopping, healthcare, education, and many other industries.\r\n1. How AI Works\r\nAI systems are trained using large amounts of data. The system analyzes the data, learns patterns, and improves its performance over time.\r\nSimple Example:\r\nWhen you watch videos on YouTube, AI studies:\r\nWhat videos you watch\r\nHow long you watch them\r\nWhat you like or search for\r\nThen it recommends similar videos based on your interests.\r\n2. Types of Artificial Intelligence\r\na) Narrow AI\r\nThis type of AI is designed for one specific task.\r\nExamples:\r\nVoice assistants like Siri and Google Assistant\r\nNetflix recommendations\r\nFace recognition\r\nMost AI used today is Narrow AI.\r\nb) General AI\r\nGeneral AI is a more advanced concept where machines can think and learn like humans across many tasks. Scientists are still researching this technology.\r\n3. Common Uses of AI\r\nHealthcare\r\nAI helps doctors detect diseases faster and analyze medical scans.\r\nEducation\r\nAI-powered apps help students learn through personalized lessons and smart tutoring systems.\r\nTransportation\r\nSelf-driving cars use AI to understand roads, traffic, and obstacles.\r\nBusiness\r\nCompanies use AI chatbots to answer customer questions automatically.\r\nSocial Media\r\nPlatforms like TikTok and Instagram use AI to recommend content users may enjoy.\r\n4. Advantages of AI\r\nFaster Work\r\nAI can process information much faster than humans.\r\nAutomation\r\nRepetitive tasks can be automated, saving time and effort.\r\nBetter Accuracy\r\nAI reduces human error in many industries.\r\n24/7 Availability\r\nAI systems can work continuously without rest.\r\n5. Disadvantages of AI\r\nJob Concerns\r\nSome jobs may become automated.\r\nPrivacy Risks\r\nAI systems collect large amounts of user data.\r\nHigh Development Cost\r\nCreating advanced AI systems requires significant resources.\r\nDependence on Technology\r\nOverusing AI may reduce human involvement in certain skills.\r\n6. Future of AI\r\nExperts believe AI will continue transforming industries such as healthcare, education, cybersecurity, robotics, and entertainment. Many future technologies will rely heavily on artificial intelligence.\r\nHowever, responsible and ethical use of AI will remain very important.\r\nConclusion\r\nArtificial Intelligence is one of the most powerful technologies in the modern world. From smartphones to smart cities, AI is changing how people live and work. Understanding AI helps people prepare for future technological advancements and career opportunities in the digital age.\r\nQuick Facts About AI\r\n✔ AI learns from data\r\n✔ AI powers recommendation systems\r\n✔ AI is used in healthcare and education\r\n✔ Most current AI is Narrow AI\r\n✔ AI continues to grow rapidly worldwide', 'images/cc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'lals', '$2y$10$TW5r/yXyN7vezWJ7CxNcxOetTkWx8kBQfPv/1xP.w0AICztuL/Vpq', 'admin'),
(2, 'lals', '$2y$10$ILqeUe/I/QwYuO8pqCTd6uqVdX3jLBpnT7GD0uGGEiXrRsxK2eWyW', 'admin'),
(3, 'bisrat', '$2y$10$rzmkd46iGtiAGeBi/pQ4pugdW0CO4QFuv2BdJ2PUp8n7HhnelaokG', 'admin'),
(4, 'Bisrat', '$2y$10$ThEjmuElfBlf5NSCsjT1KOluHZR6EKXSP51.WEoxxiTs49T05reU2', 'user'),
(5, 'Bisrat', '$2y$10$3IycLczOTBKf24c3MhjFnOjrahno.a/YJhqzDvKVp5ODsiHBCoMvO', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
