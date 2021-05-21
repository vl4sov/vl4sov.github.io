script_name("AntiCasino") -- �������� �������
script_authors("vl4sov") -- ����� �������
script_version(1) -- ������ �������

local sampev = require 'lib.samp.events' -- ��������� ���������
require "lib.moonloader" -- ��������� ���������

function main() -- �������� �������
  if not isSampLoaded() or not isSampfuncsLoaded() then return end -- �������� �� �������� ����� � ����������
  while not isSampAvailable() do wait(100) end -- ��������� ���� �������� �������� ����� � ����������, ����� �������� ���� �� ���������� ���� � ��������

  sampAddChatMessage(script.this.name.." |{FFFFFF} ������ ������� ��������.", 0x6495ED) -- ��������� ������� ��������� ��� �������� �������

  while true do -- ����������� ���� ��� ������ �������, ����� �� �� ���������� ����� ����� ��������
    wait(0) -- ����� �������� ������������ �����
  end -- ����� �����
end -- ����� �������

function sampev.onSendPickedUpPickup(pid) -- ������ �� ������ ������
  pX, pY, pZ = getCharCoordinates(playerPed) -- ��������� ��������� ���������
  if getDistanceBetweenCoords3d(pX, pY, pZ, 1022.5, - 1123.0, 24.0) < 5 or getDistanceBetweenCoords3d(pX, pY, pZ, 2195.0, 1677.5, 12.5) < 5 or getDistanceBetweenCoords3d(pX, pY, pZ, 2014.8, 1106.8, 10.8) < 5 then -- ���������� ��������� ���������� � ������ ������
    sampAddChatMessage(script.this.name.." |{FFFFFF} ���� � ������ ����������.", 0x6495ED) -- ��������� ������� ��������� ��� ������ ������
    return false -- ����������� �����
  end -- ����� ��������
end -- ����� �������