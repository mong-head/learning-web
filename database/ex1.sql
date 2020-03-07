--mysql.exe있는 파일로 가기
cd C:\Bitnami\wampstack-7.3.13-0\mysql\bin

--실행
mysql -h192.168.1.134 -uroot -p

-- 데이터 베이스 보기
show databases;

-- 데이터베이스 생성
CREATE DATABASE opentutorials CHARACTER SET utf8 COLLATE utf8_general_ci;

-- 데이터베이스 선택
use opentutorials;

-- 테이블 생성
CREATE TABLE `topic` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 테이블 확인
show tables;

-- 데이터 삽입
INSERT INTO `topic` (`id`, `title`, `description`, `author`, `created`) VALUES(1, 'About JavaScript', '<h3>Desctiption</h3>\r\n<p>JavaScript  is a dynamic computer programming language. It is most commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously, and alter the document content that is displayed.</p>\r\n<p>\r\nDespite some naming, syntactic, and standard library similarities, JavaScript and Java are otherwise unrelated and have very different semantics. The syntax of JavaScript is actually derived from C, while the semantics and design are influenced by the Self and Scheme programming languages.\r\n</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n  <li><a href="http://en.wikipedia.org/wiki/Dynamic_HTML">Dynamic HTML and Ajax (programming)</a></li>\r\n  <li><a href="http://en.wikipedia.org/wiki/Web_interoperability">Web interoperability</a></li>\r\n  <li><a href="http://en.wikipedia.org/wiki/Web_accessibility">Web accessibility</a></li>\r\n</ul>\r\n', 'egoing', '2015-03-31 12:14:00');
INSERT INTO `topic` (`id`, `title`, `description`, `author`, `created`) VALUES(2, 'Variable and Constant', '<h3>Desciption</h3>\r\n\r\nIn computer programming, a variable or scalar is a storage location paired with an associated symbolic name (an identifier), which contains some known or unknown quantity or information referred to as a value. The variable name is the usual way to reference the stored value; this separation of name and content allows the name to be used independently of the exact information it represents. The identifier in computer source code can be bound to a value during run time, and the value of the variable may thus change during the course of program execution.\r\n\r\n<h3>See Also</h3>\r\n<ul>\r\n<li>Non-local variable</li>\r\n<li>Variable interpolation</li>\r\n</ul>\r\n', 'k8805', '2015-05-14 10:04:00');
INSERT INTO `topic` (`id`, `title`, `description`, `author`, `created`) VALUES(3, 'Opeartor', '<h2>Operator</h2>\r\n<h3>Description</h3>\r\n<p>Programming languages typically support a set of operators: constructs which behave generally like functions, but which differ syntactically or semantically from usual functions</p>\r\n<p>Common simple examples include arithmetic (addition with +, comparison with >) and logical operations (such as AND or &&). </p>\r\n', 'egoing', '2015-06-18 05:00:00');
INSERT INTO `topic` (`id`, `title`, `description`, `author`, `created`) VALUES(4, 'Conditional', '<h3>Description</h3>\r\n<p>In computer science, conditional statements, conditional expressions and conditional constructs are features of a programming language which perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false. Apart from the case of branch predication, this is always achieved by selectively altering the control flow based on some condition.</p>\r\n<p>In imperative programming languages, the term "conditional statement" is usually used, whereas in functional programming, the terms "conditional expression" or "conditional construct" are preferred, because these terms all have distinct meanings.</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href="http://en.wikipedia.org/wiki/Branch_(computer_science)" title="Branch (computer science)">Branch (computer science)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Conditional_compilation" title="Conditional compilation">Conditional compilation</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Dynamic_dispatch" title="Dynamic dispatch">Dynamic dispatch</a> for another way to make execution choices</li>\r\n<li><a href="http://en.wikipedia.org/wiki/McCarthy_Formalism" title="McCarthy Formalism">McCarthy Formalism</a> for history and historical references</li>\r\n<li><a href="http://en.wikipedia.org/wiki/Named_condition" title="Named condition" class="mw-redirect">Named condition</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Test_(Unix)" title="Test (Unix)">Test (Unix)</a></li>\r\n<li><a href="http://en.wikipedia.org/wiki/Yoda_conditions" title="Yoda conditions">Yoda conditions</a></li>\r\n</ul>', 'c2', '2015-07-25 00:00:00');

-- 여기서 ('id')는 빼도 됨 그럼 그냥 자동으로 increment해줌IS

-- 데이터 가지고 오기
SELECT * FROM topic;
