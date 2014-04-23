CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clent_id` int(11) NOT NULL,
  `stuff_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `chat_session` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `chat`
--


-- --------------------------------------------------------

--
-- Table structure for table `chat_data`
--

CREATE TABLE IF NOT EXISTS `chat_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_session_id` varchar(50) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `send_to` varchar(30) NOT NULL,
  `msg` mediumtext NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `chat_data`
--

INSERT INTO `chat_data` (`id`, `chat_session_id`, `sender`, `send_to`, `msg`, `time`) VALUES
(1, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380841538),
(2, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '', 1380841719),
(3, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '', 1380841746),
(4, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '0', 1380842228),
(5, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '0', 1380842474),
(6, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '0', 1380842785),
(7, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'Hello', 1380842920),
(8, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'Hello', 1380842923),
(9, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380842970),
(10, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380842973),
(11, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'asdfasd', 1380843347),
(12, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'adfdafdsfd', 1380843435),
(13, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380843484),
(14, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'dfadsfadsfsdaf', 1380843746);
