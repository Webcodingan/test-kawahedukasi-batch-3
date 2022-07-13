SELECT * FROM kawahedukasi
     ORDER BY gaji DESC
     LIMIT 1;


SELECT * FROM `kawahedukasi` WHERE `kelas` = 'BACKEND' ORDER BY `kawahedukasi`.`nilai` DESC, `kawahedukasi`.`gaji` DESC LIMIT 1;

SELECT COUNT(`nama`) FROM `kawahedukasi` WHERE `kelas` = 'FRONTEND'

SELECT MAX(`nilai`) AS `nilai_tertinggi`, MAX(`jumlah_kehadiran`) AS `jumlah_kehadiran_tertinggi` FROM `kawahedukasi` WHERE `kelas` = 'FRONTEND'