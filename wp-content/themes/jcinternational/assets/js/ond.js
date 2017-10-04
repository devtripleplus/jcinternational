//Last updated on:Tue Apr 25 05:26:00 GMT 2017

var airports = [];
airports[0] = { code:'CDG',en:'Airport intermational Charles de Gaulle',km:'Airport intermational Charles de Gaulle',zh:'Airport intermational Charles de Gaulle'};
airports[1] = { code:'BAH',en:'Bahrain International Airport',km:'Bahrain International Airport',zh:'Bahrain International Airport'};
airports[2] = { code:'CMB',en:'Colombo International Airport',km:'Colombo International Airport',zh:'Colombo International Airport'};
airports[3] = { code:'FRA',en:'Frankfurt Airport',km:'Frankfurt Airport',zh:'Frankfurt Airport'};
airports[4] = { code:'CAN',en:'Guangzhou New Baiyun Airport',km:'Guangzhou New Baiyun Airport',zh:'Guangzhou New Baiyun Airport'};
airports[5] = { code:'PNH',en:'Phnom Penh',km:'Phnom Penh',zh:'Phnom Penh'};
airports[6] = { code:'REP',en:'Siem Reap International Airport(REP)',km:'Siem Reap International Airport(REP)',zh:'Siem Reap International Airport(REP)'};
airports[7] = { code:'KOS',en:'Sihanoukville',km:'Sihanoukville',zh:'Sihanoukville'};
airports[8] = { code:'KTM',en:'Tribhuvan International Airport'};
airports[9] = { code:'MLE',en:'Velana International Airport',km:'Velana International Airport',zh:'Velana International Airport'};
var currencies = [];
currencies[0] = { code:'KHR',en:'Cambodia, Riels',km:'Cambodia, Riels',zh:'Cambodia, Riels'};
currencies[1] = { code:'USD',en:'US Dollar'};
currencies[2] = { code:'CNY',en:'Chinese Yuan',km:'Chinese Yuan',zh:'Chinese Yuan'};
currencies[3] = { code:'BHD',en:'Bahraini Dinar',km:'Bahraini Dinar',zh:'Bahraini Dinar'};
var origins = [];
origins[0] = [[5,'QD',1,'QD',0, [[]]],[2,'QD',1,'QD',1, [['PNH']]],[6,'QD',1,'QD',1, [['PNH']]],[7,'QD',1,'QD',1, [['PNH']]],[7,'QD',1,'QD',1, [['PNH']]],[8,'QD',1,'QD',1, [['PNH']]],[1,'QD',1,'QD',1, [['PNH']]],[3,'QD',1,'QD',1, [['PNH']]],[4,'QD',1,'QD',1, [['PNH']]],[9,'QD',1,'QD',1, [['PNH']]]];
origins[1] = [[5,'QD',3,'QD',0, [[]]],[2,'QD',3,'QD',1, [['PNH']]],[6,'QD',3,'QD',1, [['PNH']]],[7,'QD',3,'QD',1, [['PNH']]],[8,'QD',3,'QD',1, [['PNH']]],[0,'QD',3,'QD',1, [['PNH']]],[3,'QD',3,'QD',1, [['PNH']]],[4,'QD',3,'QD',1, [['PNH']]],[9,'QD',3,'QD',1, [['PNH']]]];
origins[2] = [[5,'QD',1,'QD',0, [[]]],[6,'QD',1,'QD',1, [['PNH']]],[7,'QD',1,'QD',1, [['PNH']]],[7,'QD',1,'QD',1, [['PNH']]],[8,'QD',1,'QD',1, [['PNH']]],[1,'QD',1,'QD',1, [['PNH']]],[0,'QD',1,'QD',1, [['PNH']]],[3,'QD',1,'QD',1, [['PNH']]],[4,'QD',1,'QD',1, [['PNH']]],[9,'QD',1,'QD',1, [['PNH']]]];
origins[3] = [[5,'QD',1,'QD',0, [[]]],[2,'QD',1,'QD',1, [['PNH']]],[6,'QD',1,'QD',1, [['PNH']]],[7,'QD',1,'QD',1, [['PNH']]],[8,'QD',1,'QD',1, [['PNH']]],[1,'QD',1,'QD',1, [['PNH']]],[0,'QD',1,'QD',1, [['PNH']]],[4,'QD',1,'QD',1, [['PNH']]],[9,'QD',1,'QD',1, [['PNH']]]];
origins[4] = [[5,'QD',2,'QD',0, [[]]],[2,'QD',2,'QD',1, [['PNH']]],[6,'QD',2,'QD',1, [['PNH']]],[7,'QD',2,'QD',1, [['PNH']]],[7,'QD',2,'QD',1, [['PNH']]],[8,'QD',2,'QD',1, [['PNH']]],[1,'QD',2,'QD',1, [['PNH']]],[0,'QD',2,'QD',1, [['PNH']]],[3,'QD',2,'QD',1, [['PNH']]],[9,'QD',2,'QD',1, [['PNH']]]];
origins[5] = [[2,'QD',0,'QD',0, [[]]],[6,'QD',0,'QD',0, [[]]],[7,'QD',0,'QD',0, [[]]],[8,'QD',0,'QD',0, [[]]],[1,'QD',0,'QD',0, [[]]],[0,'QD',0,'QD',0, [[]]],[3,'QD',0,'QD',0, [[]]],[4,'QD',0,'QD',0, [[]]],[9,'QD',0,'QD',0, [[]]]];
origins[7] = [[5,'QD',0,'QD',0, [[]]],[2,'QD',0,'QD',1, [['PNH']]],[6,'QD',0,'QD',1, [['PNH']]],[8,'QD',0,'QD',1, [['PNH']]],[1,'QD',0,'QD',1, [['PNH']]],[0,'QD',0,'QD',1, [['PNH']]],[3,'QD',0,'QD',1, [['PNH']]],[4,'QD',0,'QD',1, [['PNH']]],[9,'QD',0,'QD',1, [['PNH']]]];
origins[8] = [[5,'QD',1,'QD',0, [[]]],[2,'QD',1,'QD',1, [['PNH']]],[6,'QD',1,'QD',1, [['PNH']]],[7,'QD',1,'QD',1, [['PNH']]],[7,'QD',1,'QD',1, [['PNH']]],[1,'QD',1,'QD',1, [['PNH']]],[0,'QD',1,'QD',1, [['PNH']]],[3,'QD',1,'QD',1, [['PNH']]],[4,'QD',1,'QD',1, [['PNH']]],[9,'QD',1,'QD',1, [['PNH']]]];
origins[9] = [[5,'QD',1,'QD',0, [[]]],[2,'QD',1,'QD',1, [['PNH']]],[6,'QD',1,'QD',1, [['PNH']]],[8,'QD',1,'QD',1, [['PNH']]],[1,'QD',1,'QD',1, [['PNH']]],[0,'QD',1,'QD',1, [['PNH']]],[3,'QD',1,'QD',1, [['PNH']]],[4,'QD',1,'QD',1, [['PNH']]]];