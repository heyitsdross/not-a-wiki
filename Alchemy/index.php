<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchFacilities/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6></a>
<h6>Alchemy Facility</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/Alchemyr.png" alt="Alchemy" align="middle"> <b>Alchemy</b></p>
<p>Tap the near-unlimited sources of Alchemy to improve your production and benefit from all your assets.</p>
<p><b>Increases</B>: <b>Undead</B>, <b>Druid</B>, and <b>Drow</B> production.</p>
<p>Pointing to this ingame will tell you how many slots are available also tells you your total research points.
<br/>
<br/>
<p><b>A1</b> - <b>For Undead</b> - <b>Research Name</b>: Plague 
<p><b>Cost</b>: 750 Qag (7.50E125) 
<p><b>Effect</b>: Increase the production of Undercities by 8% per assistant you own.
<br/>
<br/>
<p><b>A10</b> - <b>For Goblin</b> - <b>Research Name</b>: Transmutation 
<p><b>Requirement</b>: 2250 Goblin Banks 
<p><b>Cost</b>: 28.83 Uqag (2.883E127) 
<p><b>Effect</b>: Increase the production of all other buildings by 85% per Goblin Bank you own.
<br/>
<br/>
<p><b>A25</b> - <b>For Demon</b> - <b>Research Name</b>: Deflagration 
<p><b>Requirement</b>: 666 Hellfire Blasts (Total this R)
<p><b>Cost</b>: 12.63 Dqag (1.263E130) 
<p> <b>Effect</b>: Reduces Hellfire Blast duration by 16 seconds, reduces its mana cost by 200 and multiplies its effect by x7.
<br/>
<br/>
<p><b>A30</b> - <b>For Fairy</b> - <b>Research Name</b>: Delayed Reaction 
<p><b>Requirement</b>: 750 Fairy Chanting (Total this R)
<p><b>Cost</b>: 12.63 Dqag (1.263E130) 
<p><b>Effect</b>: Increases duration of Fairy Chanting based on the amount of Enchanted Fields, Inns and Blacksmiths you own and provides a progressively increasing bonus to the spell.
<p><b>Formula</b>: Additive Production increase: floor(1000 * t^1.5); Duration increase: floor(x / 800)^0.8) seconds; where t is how long FC has been active in seconds, and x is the number of Farms, Inns, and Blacksmiths you own.
<br/>
<br/>
<p><b>A50</b> - <b>For Angel</b> - <b>Research Name</b>: Gilding 
<p><b>Requirement</b>: 120 m/s Mana Regen(as Undead) 
<p><b>Cost</b>: 318.8 Tqag (3.188E134) 
<p><b>Effect</b>: Heaven's Domains further increase your mana regeneration rate. 
<p><b>Formula</b>: 1.45 * x^0.45, where x is the number of Heaven's Domains you own.
<br/>
<br/>
<p><b>A55</b> - <b>For All Factions</b> - <b>Research Name</b>: Refraction 
<p><b>Requirement</b>: Cast 25000 spells (This Game)
<p><b>Cost</b>: 2.421 Qaqag (2.421E135) 
<p><b>Effect</b>: Improve offline production based on spells cast. 
<p><b>Formula</b>: round 5 * x ^ 0.85, where x is your Spells Cast (Total) stat.
<br/>
<br/>
<p><b>A105</b> - <b>For All Factions</b> - <b>Research Name</b>: Fusion 
<p><b>Requirement</b>: 2750 Blacksmiths 
<p><b>Cost</b>: 1.544 Spqag (1.544E144) 
<p><b>Effect</b>: Increases the production of buildings based on the amount of Faction Coins found this game. 
<p> <b>Formula</b>: round(0.7 * ln^3(1 + x))%, where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>A120</b> - <b>For All Factions</b> - <b>Research Name</b>: Vivification 
<p><b>Requirement</b>: Have 6500 mana 
<p><b>Cost</b>: 676 Spqag (6.76E146)
<p><b>Effect</b>: Gain additional assistants based on max mana. 
<p> <b>Formula</b>: floor(x/15)^0.825), where x is your maximum mana.<p>Tip: Use Fairy with Faceless bloodline.
<br/>
<br/>
<p><b>A135</b> - <b>For All Factions</b> - <b>Research Name</b>: Decay 
<p><b>Requirement</b>: 1 Day Total Play Time any Faction (This R) (Must be Undead to unlock once condition is met.)
<p><b>Cost</b>: 296 OcQag (9.6E149) 
<p><b>Effect</b>: Increase the production on all buildings based on total time spent. 
<p><b>Formula</b>: round(c * x^0.7)%, where x is your Playtime (Total) in seconds stat and c is 0.03(2^0.7), which is approximately 0.049.
<br/>
<br/>
<p><b>A150</b> - <b>For All Factions</b> - <b>Research Name</b>: Explosives 
<p><b>Requirement</b>: Research (A25) Deflagration & (A30) Delayed Reaction 
<p><b>Cost</b>: 129.6 Noqag (1.296E152) 
<p><b>Effect</b>: Whenever you cast a spell, increase the production of your most productive building based on the amount of mana produced in this game for 20 seconds. If another spell is cast while this effect is active, it is restored to full duration. 
<p><b>Formula</b>: round(0.7 * x^0.6)%, where x is your Mana Produced (Total) stat.
<br/>
<br/>
<p><b>A175</b> - <b>For Undead</b> - <b>Research Name</b>: Soulweaving 
<p><b>Requirement</b>: Research Cursing (D25) &amp; Reinforcing (C135) 
<p><b>Cost</b>: 3.273 Uqig (3.273E156) 
<p><b>Effect</b>: Increase the production of all buildings based on the amount of times you Reincarnated. 
<p><b>Formula</b>: round(2.5 * x^2.25)%, where x is the amount of times you reincarnated.
<br/>
<br/>
<p><b>A200</b> - <b>For All Factions</b> - <b>Research Name</b>: Corrosion 
<p><b>Requirement</b>: Research Plague (A1) &amp; Decay (A135) 
<p><b>Cost</b>: 82.65 Dqig (82.65E160) 
<p><b>Effect</b>: Increase clicking reward based on time spent in this game. 
<p><b>Formula</b>: round(c * x^0.75)%, where x is your Playtime (Total) in seconds stat and c is 0.07(2^0.75), which is approximately 0.118.
<br/>
<br/>
<p><b>A250</b> - <b>For All Factions</b> - <b>Research Name</b>: Philosopher's Stone 
<p><b>Requirement</b>: Research Transmutation (A10) &amp; Empowered Luck (S175) 
<p><b>Cost</b>: 52.7 Qiqig (5.27E169) 
<p><b>Effect</b>: Increase production bonus from gems based on the amount of research made. 
<p><b>Formula</b>: floor(x^0.9 / 25)%, where x is the amount of research made.
<br/>
<br/>
<p><b>A251</b> - <b>For Druid</b> - <b>Research Name</b>: Infusion 
<p><b>Requirement</b>: Secrets of the Ancients (as Druids) 
<p><b>Cost</b>: 79.05 QiQig (7.905E169) 
<p><b>Effect</b>: Increase the production of Stonehenge Circles based on mana produced in this game. 
<p><b>Formula</b>: round(0.75 * x ^0.6)%, where x is your Mana Produced (This Game) stat.
<br/>
<br/>
<p><b>A270</b> - <b>For All Factions</b> - <b>Research Name</b>: Synthesis 
<p><b>Requirement</b>: 20 B (2E10) Faction Coins (Found this game)
<p><b>Cost</b>: 175.2 SxQig (1.752E173) 
<p><b>Effect</b>: Increase mana regeneration based on the amount of Faction Coins found in this game. 
<p><b>Formula</b>: floor(12 * ln(1 + x)) / 10, where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>A300</b> - <b>For Faceless</b> - <b>Research Name</b>: Creeping 
<p><b>Requirement</b>: Produce 5M mana (This game, as Druid) 
<p><b>Cost</b>: 33 OcQig (3.36E178) 
<p><b>Effect</b>: Increase mana regeneration based on mana produced in this game. 
<p><b>Formula</b>: floor(30 * ln(1 + x) ^ 1.2) / 10, where x is your Mana Produced (This Game) stat.
<br/>
<br/>
<p><b>A305</b> - <b>For All Factions</b> - <b>Research Name</b>: Engraving 
<p><b>Requirement</b>: 5 days as Druids (Total across all Rs)
<p><b>Cost</b>: 255.2 OcQig (2.552E179) 
<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.
<p><b>Effect</b>: Also increase Faction Coins find chance by a multiplicative 100%.
<p><b>Formula</b>: floor(3.5 * logE(1+x) ^ 3.5)%, where x is your Spells Cast (This Game) stat
<p>or approximately
<p><b>Formula</b>: floor((ln(x) + 0.69)^{2.75})%, where x is your Spells Cast (This Game) stat.
<br/>
<br/>
<p><b>A330</b> - <b>For All Factions</b> - <b>Research Name</b>: Adaptation 
<p><b>Requirement</b>: Research Mutation (D260) &amp; Meditation (D275) 
<p><b>Cost</b>: 6.443 Sxg (6.443E183) 
<p><b>Effect</b>: Increase the production of all buildings based on time spent playing as other factions. 
<p><b>Formula</b>: round(0.05 * x^0.7)%, where x is time spent as other factions.
<br/>
<br/>
<p><b>A375</b> - <b>For Druid</b> - <b>Research Name</b>: Transfusion 
<p><b>Requirement</b>: Research Infusion (A251) &amp; Engraving (A305) 
<p><b>Cost</b>: 541 DSxg (5.41E191) 
<p><b>Effect</b>: Gain additional assistants based on mana produced this game. 
<p><b>Formula</b>: floor(4.5 * ln(1 + x)), where x is your Mana Produced (This Game) stat.
<br/>
<br/>
<p><b>A400</b> - <b>For All Factions But Mercenary</b> - <b>Research Name</b>: Bloodspring 
<p><b>Requirement</b>: Research Assimilation (S251) &amp; Transfusion (A375). 
<p><b>Cost</b>: 13.66 QaSxg (1.366E196) 
<p><b>Effect</b>: You get your faction's Bloodline effect for free. Bloodstream counts time spent with both factions. 
<b>NOTE</b>: Does not work with two Bloodlines of the same type.
<br/>
<br/>
<p><b>A410</b> - <b>For Drow</b> - <b>Research Name</b>: Poisons 
<p><b>Requirement</b>: 4000 Sanctuaries
<p><b>Cost</b>: 787.7 QaSxg (7.877E197) 
<p><b>Effect</b>: Increase the production of all other buildings by 95% per Spider Sanctuary you own.
<br/>
<br/>
<p><b>A480</b> - <b>For All Factions</b> - <b>Research Name</b>: Waste 
<p><b>Requirement</b>: 2000 Royal Exchanges 
<p><b>Cost</b>: 1.67 NoSxg (1.67E210) 
<p><b>Effect</b>: Increase offline production based on the amount of Royal Exchanges you purchased. 
<p><b>Formula</b>: 120 * x ^ 0.85, where x is your Royal Exchanges Made stat.
<br/>
<br/>
<p><b>A495</b> - <b>For Dwarf</b> - <b>Research Name</b>: Elixirs 
<p><b>Requirement</b>: 500 Base Assistants (as Drow) 
<p><b>Cost</b>: 731.4 NoSxg (7.314E212) 
<p><b>Effect</b>: Increase assistants production based on the amount of research made. 
<p><b>Formula</b>: 120 * x^0.42%, where x is the Amount of Researches made.
<br/>
<br/>
<p><b>A545</b> - <b>For All Factions</b> - <b>Research Name</b>: Mineralogy 
<p><b>Requirement</b>: 700 trophies 
<p><b>Cost</b>: 466.3 DSpg (4.663E221) 
<p><b>Effect</b>: Increases mana regeneration based on Gems you own. 
<p><b>Formula</b>:  log10(x) / 2, where x is Gems you own.
<br/>
<br/>
<p><b>A590</b> - <b>For Undead,Drow</b> - <b>Research Name</b>: Hexing 
<p><b>Requirement</b>: 200 Drow Exchanges as Drodead, Research Cursing (D25) and Poisons (A410) 
<p><b>Cost</b>: 39.16 QiSpg (3.916E229) 
<p><b>Effect</b>: Increase the production of all buildings based on mana produced and the percentage of offline time spent in this game. 
<p><b>Formula</b>: 0.045 * x^0.45 * p%, where x is your Mana Produced (This Game) stat and p is the percentage of your Time Spent Offline for this game.
<br/>
<br/>
<p><b>A1200</b> - <b>For Neutral,Dragon</b> - <b>Research Name</b>: Melting
<p><b>Requirement</b>: 5000 Iron Stronghold, Any Neutral Dragon
<p><b>Cost</b>: 15.56 Uvg (1.556E67)
<p><b>Effect</b>: Increase the production of all other buildings per Iron Strongholds owned by 0.35%.
<p><b>Formula</b>: 0.35 * x, where x is Iron Strongholds owned
<br/>
<br/>
<p><b>A1325</b> - <b>For Any</b> - <b>Research Name</b>: Calefaction
<p><b>Requirement</b>: 4500 Excavations (This R)
<p><b>Cost</b>: 601.6 Tvg (6.016E74)
<p><b>Effect</b>: Increase mana regeneration based on the amount of excavations made.
<p><b>Formula</b>:  floor(0.02 * X), where x is current excavations<p>Tip: E290 and end of R54.
<br/>
<br/>
<p><b>A1500</b> - <b>For Druid,Dragon</b> - <b>Research Name</b>: Sublimation
<p><b>Requirement</b>: 21600s (6 hours) Grand Balance Cast Time (This Game), Research D590 & A1325, Druid,Dragon
<p><b>Cost</b>: 25.2 Spvg (2.52e85)
<p><b>Effect</b>: Increase Max Mana based on the amount of Unique Buildings you own.
<p><b>Formula</b>: 8*x^0.8, where x is Unique Buildings owned.
<br/>
<br/>
<p><b>A2950</b> - <b>For Mercenary</b> - <b>Research Name</b>: Combination 
<p><b>Requirement</b>: All Lineages Level at 15.  
<p><b>Cost</b>: 259 SxQig (2.59e173) 
<p><b>Effect</b>: Select an aditional bloodline. 
<p><b>Effect</b>: You also gain all the base effect of its respective Lineage. 
<br/>
<br/>
<p><b>A3400</b> - <b>For Any</b> - <b>Research Name</b>: Chemistry 
<p><b>Requirement</b>: 1 No (1e30) FC (Found this Game), (Customizing C3000) and (Manipulation S3200).  
<p><b>Cost</b>: 533.7 QiSxg (5.337e200) 
<p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.
<p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 350%.
<p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.
<?php include "../scripts/footer.html"; ?>
