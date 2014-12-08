/*  saving Calculation.js
 *  saving calculator fomulation
 *
 *   Revision
 * 	 Created by Terence at 12/02/2014
 */

var totalYearDriving;
var disToWork;
var priceOfGas, priceOfElec;
//hybird mode
var Hybird_Modes = {
    "Current" : 8,
    "Toyota Prius" : 4.8,
    "Ford C-Max" : 5.2,
    "VW Jetta Hybrid" : 5.2,
    "Toyota Prius Plug in" : 4.7,
    "Chevrolet Volt" : 6.4,
    "Ford C-Max Plug in" : 6.2,
    "BMW i3 REx " : 6
};
// EV model
var EV_Modes = {
    "Toyota Prius Plug in" : 36.3,
    "Chevrolet Volt" : 22.1,
    "Ford C-Max Plug in" : 23.9,
    "BMW i3 REx" : 18,
    "Ford Focus Electric" : 20,
    "BMW i3" : 16.9,
    "Nissan Leaf" : 18,
    "Telsa Model S 60kWh" : 22.2,
    "Telsa Model S 85kWh" : 23.8
};
//Electric Range
var Electric_Range = {
    "Toyota Prius Plug in" : 40,
    "Chevrolet Volt" : 62,
    "Ford C-Max Plug in" : 32,
    "BMW i3 REx" : 116,
    "Ford Focus Electric" : 122,
    "BMW i3" : 130,
    "Nissan Leaf" : 117,
    "Telsa Model S 60kWh" : 335,
    "Telsa Model S 85kWh" : 426
};

var CAR_MSRP = {
    "Current" : 23850,
    "Toyota Prius" : 26155,
    "Ford C-Max" : 26449,
    "VW Jetta Hybrid" : 28490,
    "Toyota Prius Plug in" : 35755,
    "Chevrolet Volt" : 38995,
    "Ford C-Max Plug in" : 35999,
    "BMW i3 REx" : 48950,
    "Ford Focus Electric" : 36199,
    "BMW i3" : 44950,
    "Nissan Leaf" : 31798,
    "Telsa Model S 60kWh" : 78970,
    "Telsa Model S 85kWh" : 89670
};

var Government_Subsity = {
    "Current" : 0,
    "Toyota Prius" : 0,
    "Ford C-Max" : 0,
    "VW Jetta Hybrid" : 0,
    "Toyota Prius Plug in" : 5000,
    "Chevrolet Volt" : 8500,
    "Ford C-Max Plug in" : 5808,
    "BMW i3 REx" : 8500,
    "Ford Focus Electric" : 8500,
    "BMW i3" : 8500,
    "Nissan Leaf" : 8500,
    "Telsa Model S 60kWh" : 8500,
    "Telsa Model S 85kWh" : 8500
};

var Utility_Factor = {
    "Toyota Prius Plug in" : 0.29,
    "Chevrolet Volt" : 0.66,
    "Ford C-Max Plug in" : 0.45,
    "BMW i3 REx" : 0.83
};

//inital values for further calculation, this has to be called before making any calculation
function initalValues(totalDrive, distanceToWork, priceGas, priceElec, currentHybirdMode, currentMSRP){
    totalYearDriving = totalDrive;
    disToWork = distanceToWork;
    priceOfGas = priceGas;
    priceOfElec = priceElec;
    Hybird_Modes.Current = currentHybirdMode;
    CAR_MSRP.Current = currentMSRP;
};

//calculate Petrol bill for different cars
// type = 1 => Hybird car
// type = 2 => Plug in Hybird
function calculatePetrolBill(type, car){
    //Hybird car
    if(type == 1){
        var mode = (typeof Hybird_Modes[car] != 'undefined')?Hybird_Modes[car]:0;
        return ((totalYearDriving / 100) * mode * priceOfGas).toFixed(2);
    }
    //Plug in Hybird
    else if(type == 2){
        
    }
}

//calculate Electrical bill for different cars
// type = 1 => Electric car
// type = 2 => Plug in Hybird
function calculateElectricBill(type, car){
    //Electric car
    if(type == 1){
        var evMode = typeof EV_Modes[car] != 'undefined'?EV_Modes[car]:0;
        return (totalYearDriving / 100 * evMode * priceOfElec).toFixed(2);
    }
    //Plug in Hybird
    else if(type == 2){
        
    }
}

//calculate additional Cost Payback
function calculateAddCostPayback(car, saving){
    var result = (CAR_MSRP[car] - CAR_MSRP.Current - Government_Subsity[car])/saving;
    return result >=0 ? Math.ceil(result) : 0;
}
//check if car is work compatible
function isWorkCompatible(car){
    if(car == "Ford Focus Electric" || car == "BMW i3" || car == "Nissan Leaf" || car == "Telsa Model S 60kWh" || car == "Telsa Model S 85kWh"){
        if(Electric_Range[car]>disToWork*2)return "YES";
        else return "NO";
    }
    else return "N/A";
}


