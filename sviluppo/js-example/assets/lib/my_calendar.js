var giorniDellaSettimana = {
     
    lunedi:    Symbol(),
    martedi:   Symbol(),
    mercoledi: Symbol(),
    giovedi:   Symbol(),
    venerdi:   Symbol(),
    sabato:    Symbol(),
    domenica:  Symbol()
};

function isGiornoLavorativo(giorno) 
{
    switch(giorno)
    {
    	case giorniDellaSettimana.lunedi:
    	case giorniDellaSettimana.martedi:
    	case giorniDellaSettimana.mercoledi:
    	case giorniDellaSettimana.giovedi:
    	case giorniDellaSettimana.venerdi:
    	{
    		return true;
    	}break;
    	case giorniDellaSettimana.sabato:
    	case giorniDellaSettimana.domenica:
    	{
    		return false;
    	}break;

    	default:
    	{
    		return undefined;
    	}break;
    }
}