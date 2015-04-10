Feature: Fikstury dla tabeli country

  Scenario: Lista fixtur z tabeli country
    Given I am on homepage
    When I follow "Qatar..."
     Then I should see "Wadi Asmah"
      And I should see "1450"
     Then I should see "Wadi Banat"
      And I should see "2001"
     Then I should see "Wadi Diyab"
      And I should see "1894