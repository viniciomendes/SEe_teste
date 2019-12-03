CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`, `user`, `password`) VALUES
(1, 'teste', 'teste'),
(2, 'teste', '$2y$10$empzMrzg3zbfvyJZMZ1/oOoQQ/knhK8.6EgX8vR0aJLmNRELE3zk.'),
(3, 'teste1', '$2y$10$iyF0U.21UmLJyXuQyovByeWCiMmwl59CV1kygGCJBJTD5n229Wk8W');