CREATE TABLE `role` (
  `role_id` int PRIMARY KEY,
  `role_name` varchar(20)
);

CREATE TABLE `user` (
  `user_id` int PRIMARY KEY,
  `role_id` int,
  `nama_lengkap` varchar(100),
  `email` varchar(100) UNIQUE,
  `password` varchar(20)
);

CREATE TABLE `divisi` (
  `divisi_id` int PRIMARY KEY,
  `ketua_divisi_id` int,
  `anggota_id` int
);

CREATE TABLE `kegiatan` (
  `kegiatan_id` int PRIMARY KEY,
  `user_id` int,
  `tanggal` date,
  `kegiatan` text,
  `approved` boolean
);

ALTER TABLE `user` ADD FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

ALTER TABLE `divisi` ADD FOREIGN KEY (`ketua_divisi_id`) REFERENCES `user` (`user_id`);

ALTER TABLE `divisi` ADD FOREIGN KEY (`anggota_id`) REFERENCES `user` (`user_id`);

ALTER TABLE `kegiatan` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
