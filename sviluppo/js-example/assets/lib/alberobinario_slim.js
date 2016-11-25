function creaAlberoBinarioDiRicerca(val)
{
	return new Object({valore:val, info:val+".info", sx:null, dx:null, parent:null});

}

function aggiungi(nodo,val)
{
	if(nodo==null)
	{
		nodo=new Object({valore:val, info:val+".info", sx:null, dx:null, parent:null});
	}
	else if(val<nodo.valore)
	{
		var temp=aggiungi(nodo.sx,val);
		temp.parent=nodo;
		nodo.sx=temp;
	}
	else if(val>nodo.valore)
	{
		var temp=aggiungi(nodo.dx,val);
		temp.parent=nodo;
		nodo.dx=temp
	}

	return nodo;
}


function visitaSimmetrica(tree) 
{
	var vs;

	if (tree.sx != null) 
	{
		vs = visitaSimmetrica(tree.sx);
	}else
	{
		var vs = "";
	}

	var vd;
	if (tree.dx != null)
	{
		vd = visitaSimmetrica(tree.dx);
	}
	else
	{
		vd = "";
	}

	return vs + " " + tree.valore + vd;
}


function visitaPreordine(tree) 
{
	var vs;

	if (tree.sx != null) 
	{
		vs = visitaSimmetrica(tree.sx);
	}else
	{
		var vs = "";
	}

	var vd;
	if (tree.dx != null)
	{
		vd = visitaSimmetrica(tree.dx);
	}
	else
	{
		vd = "";
	}

	return tree.valore + " " + vs + vd;
}

function visitaPostordine(tree) 
{
	var vs;

	if (tree.sx != null) 
	{
		vs = visitaSimmetrica(tree.sx);
	}else
	{
		var vs = "";
	}

	var vd;
	if (tree.dx != null)
	{
		vd = visitaSimmetrica(tree.dx);
	}
	else
	{
		vd = "";
	}

	return vs + vd + " " + tree.valore;
}


function frontiera(tree) 
{
	if (tree.sx == null && tree.dx == null) 
	{
		return tree.valore + " ";
	}

	var fs;
	if (tree.sx  != null) 
	{
		fs = frontiera(tree.sx);
	}
	else 
	{
		fs = "";
	}

	var fd;
	if (tree.dx  != null) 
	{
		fd = frontiera(tree.dx);
	}
	else
	{
		fd = "";
	}

	return fs + fd;
}

function altezza(tree) 
{
	if (tree.sx == null && tree.dx == null) 
	{
		return 0;
	}

	var as;
	if (tree.sx != null) 
	{
		as = altezza(tree.sx);
	}
	else
	{
		as = 0;
	}

	var ad;
	if (tree.dx != null) 
	{
		ad = altezza(tree.dx);
	}
	else
	{
		ad = 0;
	}

	if (as > ad) 
	{
		return as + 1;
	}
	else
	{
		return ad + 1;
	}
}

function count(tree)
{
	if (tree==null)
	{
		return 0;
	}

	if (tree.sx != null && tree.dx != null) 
	{
		return count(tree.sx)+count(tree.dx)+1;
	}

	if (tree.sx != null)
	{
		return count(tree.sx)+1;
	}

	if (tree.dx != null)
	{
		return count(tree.dx)+1;
	}

	return 1;
}

function minValore(tree) 
{
	if (tree.sx==null)
	{
		return tree.valore;
	}
	else
	{
		return minValore(tree.sx);
	}
}

function maxValore(tree) 
{
	if (tree.dx==null)
	{
		return tree.valore;
	}
	else
	{
		return maxValore(tree.dx);
	}
}

function minNodo(tree) 
{
	if (tree==null)
	{
		return null;
	}
	if (tree.sx==null)
	{
		return tree;
	}

	return minNodo(tree.sx);
}

function maxNodo(tree) 
{
	if (tree==null)
	{
		return null;
	}
	if (tree.dx==null)
	{
		return tree;
	}

	return maxNodo(tree.dx);
}

function cerca(tree,k) 
{
	if (k == tree.valore) 
	{
		return true;
	}

	if (k < tree.valore) 
	{
		if (tree.sx == null) 
		{
			return false;
		}
		else 
		{
			return cerca(tree.sx,k);
		}
	}
	if (k > tree.valore) 
	{
		if (tree.dx == null) 
		{
			return false;
		}
		else
		{
			return cerca(tree.dx,k);
		}
	}
};

function get(tree,k) 
{
	if (k == tree.valore) 
	{
		return tree;
	}

	if (k < tree.valore) 
	{
		if (tree.sx == null) 
		{
			return null;
		}
		else 
		{
			return get(tree.sx,k);
		}
	}
	if (k > tree.valore) 
	{
		if (tree.dx == null) 
		{
			return null;
		}
		else
		{
			return get(tree.dx,k);
		}
	}
}

function getParent(nodo)
{
	return nodo.parent;
}

function successore(tree,val)
{
	var T=get(tree,val);

	if (T==null)
	{
		return null;
	}

	if(T.dx!=null)
	{
		return minNodo(T.dx);
	}
	else 
	{
		P=T.parent;

		while(P!=null && T === P.dx)
		{
			T=P;
			P=P.parent;
		}

		return P;
	}
}

function predecessore(tree,val)
{
	var T=get(tree,val);
	if (T==null)
	{
		return null;
	}

	if(T.sx!=null)
	{
		return minNodo(T.sx);
	}
	else
	{
		P=T.parent;
		while(P!=null && T === P.sx)
		{
			T=P;
			P=P.parent;
		}

		return P;
	}
}

function toArray(tree)
{	
	var vtot=[];

	if(tree==null)
	{
		return vtot;
	}
	
	if (tree.sx != null) 
	{
		vtot.push(toArray(tree.sx));
	}

	vtot.push(tree.valore);

	if (tree.dx != null)
	{
		vtot.push(toArray(tree.dx));
	}

	return vtot;
}

function cancella(tree,val)
{
	var z=get(tree,val);
	if (z!=null)
	{
		
		var y=null;
		var x=null;
		if ( (z.sx == null) || (z.dx == null) )
		{
			y=z;
		}
		else
		{
			y=successore(tree,z.valore);
		}

		if (y.sx != null)
		{
			x=y.sx;
		}
		else
		{
			x=y.dx;
		}

		if(x!=null)
		{
			x.parent=y.parent;
		}

		if (y.parent==null)
		{
			tree=x;
		}
		else
		{
			if(y.parent.sx==y)	
			{
				y.parent.sx=x;
			}
			else
			{
				y.parent.dx=x;
			}
		}

		if(y!=z)
		{
			z.valore=y.valore;
		}
	}
	else
	{
		println(val+" non esiste nell'albero !!!")	;
	}
}