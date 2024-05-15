-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 01:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apcpedagogie`
--

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `Id_Cours` int(11) NOT NULL,
  `Titre_Cours` varchar(255) NOT NULL,
  `Description_Cours` text DEFAULT NULL,
  `Niveau_Cours` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`Id_Cours`, `Titre_Cours`, `Description_Cours`, `Niveau_Cours`) VALUES
(1, 'Introduction à la programmation', 'Ce cours couvre les bases de la programmation.', 'Débutant'),
(2, 'Algorithmique avancée', 'Ce cours explore des concepts algorithmiques avancés.', 'Avancé'),
(3, 'Bases de données', 'Ce cours aborde les principes fondamentaux des bases de données.', 'Intermédiaire'),
(4, 'Développement web', 'Ce cours vous apprend à créer des sites web interactifs.', 'Intermédiaire'),
(5, 'Programmation orientée objet', 'Ce cours explore les principes de la programmation orientée objet.', 'Intermédiaire'),
(6, 'Intelligence artificielle', 'Ce cours couvre les bases de l\'intelligence artificielle et des algorithmes d\'apprentissage automatique.', 'Avancé'),
(7, 'Sécurité informatique', 'Ce cours examine les principes de base de la sécurité informatique et des techniques de protection des données.', 'Intermédiaire'),
(8, 'Développement mobile', 'Ce cours vous apprend à créer des applications mobiles pour les plateformes iOS et Android.', 'Intermédiaire'),
(9, 'Programmation bas niveau pour systèmes embarqués', 'Ce cours enseigne la programmation bas niveau pour les systèmes embarqués, avec le C et l\'assembleur.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Avancé'),
(10, 'Conception matérielle pour systèmes embarqués', 'Ce cours aborde la conception matérielle des systèmes embarqués, y compris l\'électronique et les microcontrôleurs.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Avancé'),
(11, 'IoT Basics', 'Intro to IoT covering sensors, connectivity, data, and applications.', 'Beginner'),
(12, 'IoT Essentials', 'Core concepts of IoT: sensors, connectivity, data handling, and application scenarios.', 'Foundational'),
(13, 'PHP AJAX CRUD', 'How to Fetch data from database using jquery ajax in php', 'Débutant');

-- --------------------------------------------------------

--
-- Table structure for table `exercices`
--

CREATE TABLE `exercices` (
  `Id_Exercice` int(11) NOT NULL,
  `Id_Cours` int(11) NOT NULL,
  `Titre_Exercice` varchar(255) NOT NULL,
  `Description_Exercice` text DEFAULT NULL,
  `Solution_Exercice` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercices`
--

INSERT INTO `exercices` (`Id_Exercice`, `Id_Cours`, `Titre_Exercice`, `Description_Exercice`, `Solution_Exercice`) VALUES
(1, 1, 'Exercice 1', 'Écrivez un programme en Python pour afficher \"Hello, World!\"', 'print(\"Hello, World!\")'),
(2, 1, 'Exercice 2', 'Écrivez un programme en Java pour calculer la somme de deux nombres.', 'int a = 5; int b = 3; int sum = a + b; System.out.println(\"Sum: \" + sum);'),
(3, 2, 'Exercice 1', 'Implémentez l\'algorithme de tri rapide (quicksort).', 'Solution rapide ici.'),
(4, 3, 'Exercice 1', 'Concevez une requête SQL pour récupérer tous les utilisateurs de la table \"Utilisateurs\".', 'SELECT * FROM Utilisateurs;'),
(5, 4, 'Exercice 2', 'Concevez une requête SQL pour sélectionner tous les articles d\'une table nommée \"Articles\".', 'SELECT * FROM Articles;'),
(6, 5, 'Exercice 1', 'Écrivez un programme en C++ pour trouver le plus grand élément dans un tableau.', 'Solution en C++ ici.'),
(7, 6, 'Exercice 1', 'Implémentez une fonction en Python pour calculer la factorielle d\'un nombre.', 'def factorial(n):\n    if n == 0:\n        return 1\n    else:\n        return n * factorial(n-1)'),
(8, 7, 'Exercice 1', 'Créez une classe Java pour représenter un étudiant avec des attributs tels que nom, âge, et numéro d\'étudiant.', 'public class Student {\n    private String name;\n    private int age;\n    private String studentID;\n\n    // Constructor\n    public Student(String name, int age, String studentID) {\n        this.name = name;\n        this.age = age;\n        this.studentID = studentID;\n    }\n\n    // Getters and setters\n    // Add methods as needed\n}'),
(9, 8, 'Exercice 1', 'Écrivez une fonction en JavaScript pour vérifier si un nombre est pair ou impair.', 'function isEven(number) {\n    return number % 2 === 0;\n}'),
(10, 9, 'Exercice 1', 'Implémentez l\'algorithme de recherche binaire en Python.', 'Solution de recherche binaire ici.'),
(11, 10, 'Exercice 1', 'Créez une page web simple en HTML avec un titre et un paragraphe.', '<!DOCTYPE html>\n<html>\n<head>\n    <title>Ma page web</title>\n</head>\n<body>\n    <h1>Titre de ma page</h1>\n    <p>Ceci est un paragraphe.</p>\n</body>\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `ville` varchar(50) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inscription`
--

INSERT INTO `inscription` (`id`, `prenom`, `nom`, `email`, `telephone`, `date_de_naissance`, `ville`, `mot_de_passe`) VALUES
(2, 'saied', 'dhiaeddine', 'dhiasaied733@gmail.com', '0092021578', '2024-05-16', 'Nabeul', '$2y$10$24NEx3Wpor.2DuTDK5g0ju0z2rINWTfNZrML7qnXX4IeOz5a5Mwgm'),
(3, 'AKRI', 'mohamed', 'akrimohamed@gmail.com', '0050321456', '2024-06-01', 'Gafsa', '$2y$10$r4U0x3fcGBlyH3EJSnjr2OHvRXpZEs/mrCLiuqXJVNFevADZr8fPy'),
(4, 'amir', 'mathlouthi', 'mathlouthiamir@gmail.com', '0098321456', '2024-06-01', 'Sfax', '$2y$10$eNcnVcXRCOdbOCAH/YYUHeG84k1Qj55stC2plOFxTEvGYIjBuNW4C'),
(5, 'taher', 'bousetta', 'taherbousetta@gmail.com', '0055321455', '2024-06-30', 'Douz', '$2y$10$kgXwIXE0.ms5MWwhXXufrOhDWs65PS8XrLvmz.Wk3O5/umGlRy2VW');

-- --------------------------------------------------------

--
-- Table structure for table `qcm`
--

CREATE TABLE `qcm` (
  `Id_QCM` int(11) NOT NULL,
  `Id_Cours` int(11) NOT NULL,
  `Titre_QCM` varchar(255) NOT NULL,
  `Description_QCM` text DEFAULT NULL,
  `Solution_QCM` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qcm`
--

INSERT INTO `qcm` (`Id_QCM`, `Id_Cours`, `Titre_QCM`, `Description_QCM`, `Solution_QCM`) VALUES
(1, 1, 'Quiz 1', 'Testez vos connaissances sur les concepts de base de la programmation.', '1. A, 2. B, 3. C, 4. D'),
(2, 2, 'Quiz 1', 'Évaluez votre compréhension des algorithmes de tri.', '1. B, 2. C, 3. A, 4. D'),
(3, 3, 'Quiz 1', 'Testez vos connaissances sur les requêtes SQL.', '1. A, 2. C, 3. B, 4. D'),
(4, 4, 'Quiz 1', 'Testez vos connaissances sur les langages web.', '1. A, 2. B, 3. D, 4. C'),
(5, 5, 'Quiz 1', 'Testez vos connaissances sur les concepts de base de la programmation en C++.', '1. B, 2. D, 3. A, 4. C'),
(6, 6, 'Quiz 1', 'Évaluez votre compréhension des fonctions récursives en Python.', '1. A, 2. B, 3. C, 4. D'),
(7, 7, 'Quiz 1', 'Testez vos connaissances sur la programmation orientée objet en Java.', '1. A, 2. B, 3. D, 4. C'),
(8, 8, 'Quiz 1', 'Testez vos connaissances sur JavaScript.', '1. A, 2. C, 3. B, 4. D'),
(9, 9, 'Quiz 1', 'Évaluez votre compréhension de la recherche binaire.', '1. B, 2. A, 3. D, 4. C'),
(10, 10, 'Quiz 1', 'Testez vos connaissances sur le langage HTML.', '1. A, 2. C, 3. D, 4. B');

-- --------------------------------------------------------

--
-- Table structure for table `tutoriels`
--

CREATE TABLE `tutoriels` (
  `Id_Tutoriel` int(11) NOT NULL,
  `Id_Cours` int(11) NOT NULL,
  `Titre_Tutoriel` varchar(255) NOT NULL,
  `Description_Tutoriel` text DEFAULT NULL,
  `Contenu_Tutoriel` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutoriels`
--

INSERT INTO `tutoriels` (`Id_Tutoriel`, `Id_Cours`, `Titre_Tutoriel`, `Description_Tutoriel`, `Contenu_Tutoriel`) VALUES
(1, 1, 'Tutoriel Python', 'Apprenez les bases de la programmation en Python.', 'Contenu du tutoriel Python ici.'),
(2, 2, 'Tutoriel Quicksort', 'Découvrez comment implémenter l\'algorithme de tri rapide.', 'Contenu du tutoriel Quicksort ici.'),
(3, 3, 'Tutoriel SQL', 'Maîtrisez les requêtes SQL avec ce tutoriel.', 'Contenu du tutoriel SQL ici.'),
(4, 4, 'Tutoriel HTML/CSS', 'Créez des sites web attrayants avec HTML et CSS.', 'Contenu du tutoriel HTML/CSS ici.'),
(5, 5, 'Tutoriel C++', 'Apprenez les bases de la programmation en C++.', 'Contenu du tutoriel C++ ici.'),
(6, 6, 'Tutoriel Fonctions Récursives', 'Découvrez comment utiliser les fonctions récursives en Python.', 'Contenu du tutoriel sur les fonctions récursives ici.'),
(7, 7, 'Tutoriel Programmation Orientée Objet en Java', 'Maîtrisez la programmation orientée objet en Java.', 'Contenu du tutoriel sur la POO en Java ici.'),
(8, 8, 'Tutoriel JavaScript', 'Apprenez les fondamentaux de JavaScript.', 'Contenu du tutoriel JavaScript ici.'),
(9, 9, 'Tutoriel Recherche Binaire', 'Découvrez l\'algorithme de recherche binaire.', 'Contenu du tutoriel sur la recherche binaire ici.'),
(10, 10, 'Tutoriel HTML', 'Maîtrisez les bases de HTML pour créer des pages web.', 'Contenu du tutoriel HTML ici.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'dhiasaied733@gmail.com', '$2y$10$4BUkbyqSk.YQh9GecDwFKOcFj3Wkagxbm8isFox8wTDCw6umvWMCK'),
(2, 'mootazmansouri@gmail.com', '$2y$10$o33OWdzXcx2RTXqSWpvn8.oiZVx.KbYah3/f/xVsRRqLdzbdX.coi'),
(3, 'akrimohamed@gmail.com', '$2y$10$K0UjHEy1rkV1APXr9C7dUe7a.ADRbtDlNjdPconbGBwtkKbkyHf9y'),
(4, 'didin@gmail.com', '$2y$10$QEENHFJcPN4UWbEddtpLueIZesWC401JnSSfirWomxA91.bwJFJai'),
(6, 'dhiasaieds@gmail.com', '$2y$10$6Ow9LRfOvKsiTMTQ4pqI4uANrYEEIxL2dzRxxKdZWVfFf/.txHuQe'),
(7, 'dhiasaied@gmail.com', '$2y$10$mkNYI2iLWMpzON8Kum/YtuXXmfj0GvGIwTXZKYGlbv3gCWKexZ38K'),
(11, 'qsdsqd@gmail.com', '$2y$10$kdLtdFUL7ZusdcFuJ39rhOmsOOf7xXJP9GpYHN0A2eFUjaIn98oK.'),
(13, 'ahmedkm@gmail.com', '$2y$10$qpgDxJe6sA2LJUXhhwuGi.kDPMq0wH/YrUkHozOeuXXYCIfG9K0VS'),
(14, 'dhiasaied123@gmail.com', '$2y$10$YWAbf2hMDBpflBeo7QSHVumlAiURddGt0qJe0z5/an7sH6SRjWwnq'),
(15, 'akriourad@gmail.com', '$2y$10$03X/Bucr8jT0GIF.Q7jMMeHfP1zIZSDy6Sr91ZoFkMHIjLGDggMfS'),
(16, 'dhiasaied333@gmail.com', '$2y$10$1JVS0vi0RguApWB6XzeJS.S5rAuJWN1iX4y7Z/AzbQsKNgRGV2LjO');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `Id_Video` int(11) NOT NULL,
  `Id_Cours` int(11) NOT NULL,
  `Titre_Video` varchar(255) NOT NULL,
  `Description_Video` text DEFAULT NULL,
  `URL_Video` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Id_Video`, `Id_Cours`, `Titre_Video`, `Description_Video`, `URL_Video`) VALUES
(1, 1, 'Introduction à Python', 'Une vidéo d\'introduction à Python.', 'https://example.com/python-intro-video'),
(2, 2, 'Quicksort Expliqué', 'Une vidéo expliquant l\'algorithme de tri rapide.', 'https://example.com/quicksort-video'),
(3, 3, 'SQL pour les Débutants', 'Une vidéo couvrant les bases de SQL.', 'https://example.com/sql-for-beginners-video'),
(4, 4, 'Création de Sites Web', 'Apprenez à créer des sites web avec HTML/CSS.', 'https://example.com/web-dev-video'),
(5, 5, 'Introduction à la Programmation en C++', 'Apprenez les bases de la programmation en C++.', 'https://example.com/cpp-intro-video'),
(6, 6, 'Fonctions Récursives en Python Expliquées', 'Une vidéo expliquant comment utiliser les fonctions récursives en Python.', 'https://example.com/python-recursive-functions-video'),
(7, 7, 'POO en Java pour Débutants', 'Découvrez la programmation orientée objet en Java.', 'https://example.com/java-oop-video'),
(8, 8, 'JavaScript Fondamental', 'Une vidéo couvrant les fondamentaux de JavaScript.', 'https://example.com/javascript-fundamentals-video'),
(9, 9, 'Algorithme de Recherche Binaire Expliqué', 'Une vidéo expliquant l\'algorithme de recherche binaire.', 'https://example.com/binary-search-video'),
(10, 10, 'HTML pour Débutants', 'Apprenez les bases de HTML pour créer des pages web.', 'https://example.com/html-for-beginners-video');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`Id_Cours`);

--
-- Indexes for table `exercices`
--
ALTER TABLE `exercices`
  ADD PRIMARY KEY (`Id_Exercice`),
  ADD KEY `Id_Cours` (`Id_Cours`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qcm`
--
ALTER TABLE `qcm`
  ADD PRIMARY KEY (`Id_QCM`),
  ADD KEY `Id_Cours` (`Id_Cours`);

--
-- Indexes for table `tutoriels`
--
ALTER TABLE `tutoriels`
  ADD PRIMARY KEY (`Id_Tutoriel`),
  ADD KEY `Id_Cours` (`Id_Cours`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`Id_Video`),
  ADD KEY `Id_Cours` (`Id_Cours`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `Id_Cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exercices`
--
ALTER TABLE `exercices`
  MODIFY `Id_Exercice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qcm`
--
ALTER TABLE `qcm`
  MODIFY `Id_QCM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tutoriels`
--
ALTER TABLE `tutoriels`
  MODIFY `Id_Tutoriel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `Id_Video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercices`
--
ALTER TABLE `exercices`
  ADD CONSTRAINT `exercices_ibfk_1` FOREIGN KEY (`Id_Cours`) REFERENCES `cours` (`Id_Cours`);

--
-- Constraints for table `qcm`
--
ALTER TABLE `qcm`
  ADD CONSTRAINT `qcm_ibfk_1` FOREIGN KEY (`Id_Cours`) REFERENCES `cours` (`Id_Cours`);

--
-- Constraints for table `tutoriels`
--
ALTER TABLE `tutoriels`
  ADD CONSTRAINT `tutoriels_ibfk_1` FOREIGN KEY (`Id_Cours`) REFERENCES `cours` (`Id_Cours`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`Id_Cours`) REFERENCES `cours` (`Id_Cours`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
