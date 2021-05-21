script_name("AntiCasino") -- Название скрипта
script_authors("vl4sov") -- Автор скрипта
script_version(1) -- Версия скрипта

local sampev = require 'lib.samp.events' -- Подгрузка библиотек
require "lib.moonloader" -- Подгрузка библиотек

function main() -- Основная функция
  if not isSampLoaded() or not isSampfuncsLoaded() then return end -- Првоерка на загрузку сампа и сампфункса
  while not isSampAvailable() do wait(100) end -- Повторный цикл проверки загрузки сампа и сампфункса, будет цикличен пока не загрузится самп и самфункс

  sampAddChatMessage(script.this.name.." |{FFFFFF} Скрипт успешно загружен.", 0x6495ED) -- Сообщение которое выводится при загрузке скрипта

  while true do -- Беспонечный цикл для работы скрипта, чтобы он не выключался сразу после загрузки
    wait(0) -- Время задержки бесконечного цикла
  end -- Конец цикла
end -- Конец функции

function sampev.onSendPickedUpPickup(pid) -- Тригер на взятие пикапа
  pX, pY, pZ = getCharCoordinates(playerPed) -- Получение координат персонажа
  if getDistanceBetweenCoords3d(pX, pY, pZ, 1022.5, - 1123.0, 24.0) < 5 or getDistanceBetweenCoords3d(pX, pY, pZ, 2195.0, 1677.5, 12.5) < 5 or getDistanceBetweenCoords3d(pX, pY, pZ, 2014.8, 1106.8, 10.8) < 5 then -- Сверивание координат персоанажа и пикапа казино
    sampAddChatMessage(script.this.name.." |{FFFFFF} Вход в казино недоступен.", 0x6495ED) -- Сообщение которое выводится при взятии пикапа
    return false -- Заверешение цикла
  end -- Конец проверки
end -- Конец функции