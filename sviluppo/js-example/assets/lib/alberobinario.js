function AlberoDiRicerca(v) 
{
	this.valore = v;
	this.info = v+".info";
	this.sinistro = null;
	this.destro = null;
	this.parent = null;

	this.getParent = function ()
		{
			return this.parent;
		};

	this.getDestro = function ()
		{
			return this.destro;
		};

	this.getSinistro = function ()
		{
			return this.sinistro;
		};

	this.aggiungi = function (k) 
		{
			if (k < this.valore) 
			{
				if (this.sinistro == null) 
				{
					var nodo=new AlberoDiRicerca(k);
					nodo.parent=this;
					this.sinistro = nodo;
				}
				else 
				{
					this.sinistro.aggiungi(k);
				}
			}
			if (k > this.valore) 
			{
				if (this.destro == null) 
				{
					var nodo=new AlberoDiRicerca(k);
					nodo.parent=this;
					this.destro = nodo;
				}
				else
				{
					this.destro.aggiungi(k);
				}
			}
			if (k == this.valore) 
			{
				println("Warning: il valore '"+this.valore+"' \xE9 presente nell'albero!!!!");
			}
		};

	this.get = function (k) 
		{
			if (k == this.valore) 
			{
				return this;
			}

			if (k < this.valore) 
			{
				if (this.sinistro == null) 
				{
					return null;
				}
				else 
				{
					return this.sinistro.get(k);
				}
			}
			if (k > this.valore) 
			{
				if (this.destro == null) 
				{
					return null;
				}
				else
				{
					return this.destro.get(k);
				}
			}
		};

	this.cerca = function (k) 
		{
			if (k == this.valore) 
			{
				return true;
			}

			if (k < this.valore) 
			{
				if (this.sinistro == null) 
				{
					return false;
				}
				else 
				{
					return this.sinistro.cerca(k);
				}
			}
			if (k > this.valore) 
			{
				if (this.destro == null) 
				{
					return false;
				}
				else
				{
					return this.destro.cerca(k);
				}
			}
		};

	this.visitaPreordine =	function() 
		{
			var vs;
			if (this.sinistro != null) 
			{
				vs = this.sinistro.visitaPreordine();
			}
			else 
			{
				vs = "";
			}
			var vd;
			if (this.destro != null) 
			{
				vd = this.destro.visitaPreordine();
			}
			else 
			{
				vd = "";
			}
			return this.valore + " " + vs + vd;
		};

	this.visitaPostordine = function() 
		{
			var vs;
			if (this.sinistro != null)
			{
				vs = this.sinistro.visitaPostordine();
			}
			else
			{
				var vs = "";
			}

			var vd;
			if (this.destro != null) 
			{
				vd = this.destro.visitaPostordine();
			}
			else
			{
				vd = "";
			}

			return vs + vd + " " + this.valore;
		};

	this.visitaSimmetrica = function() 
		{
			var vs;

			if (this.sinistro != null) 
			{
				vs = this.sinistro.visitaSimmetrica();
			}else
			{
				var vs = "";
			}

			var vd;
			if (this.destro != null)
			{
				vd = this.destro.visitaSimmetrica();
			}
			else
			{
				vd = "";
			}

			return vs + " " + this.valore + vd;
		};

	this.count = function()
		{
			if (this==null)
			{
				return 0;
			}

			if (this.sinistro != null && this.destro != null) 
			{
				return this.sinistro.count()+this.destro.count()+1;
			}

			if (this.sinistro != null)
			{
				return this.sinistro.count()+1;
			}

			if (this.destro != null)
			{
				return this.destro.count()+1;
			}

			return 1;
		};

	this.altezza = function() 
		{
			if (this.sinistro == null && this.destro == null) 
			{
				return 0;
			}

			var as;
			if (this.sinistro != null) 
			{
				as = this.sinistro.altezza();
			}
			else
			{
				as = 0;
			}

			var ad;
			if (this.destro != null) 
			{
				ad = this.destro.altezza();
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
		};

	this.frontiera = function() 
		{
			if (this.sinistro == null && this.destro == null) 
			{
				return this.valore + " ";
			}

			var fs;
			if (this.sinistro != null) 
			{
				fs = this.sinistro.frontiera();
			}
			else 
			{
				fs = "";
			}

			var fd;
			if (this.destro != null) 
			{
				fd = this.destro.frontiera();
			}
			else
			{
				fd = "";
			}

			return fs + fd;
		};

	this.minValore = function() 
		{
			if (this.sinistro==null)
			{
				return this.valore;
			}
			else
			{
				return this.sinistro.minValore();
			}
		};

	this.maxValore = function() 
		{
			if (this.destro==null)
			{
				return this.valore;
			}
			else
			{
				return this.destro.maxValore();
			}
		};

	this.minNodo = function() 
		{
			if (this==null)
			{
				return null;
			}
			if (this.sinistro==null)
			{
				return this;
			}
			
			return this.sinistro.minNodo();
		};

	this.maxNodo = function() 
		{
			if (this==null)
			{
				return null;
			}

			if (this.destro==null)
			{
				return this;
			}
			
			return this.destro.maxNodo();
		};

	this.successore = function(val)
		{
			var T=this.get(val);

			if (T==null)
			{
				return null;
			}

			if(T.destro!=null)
			{
				return T.destro.minNodo();
			}
			else 
			{
				P=T.parent;

				while(P!=null && T === P.destro)
				{
					T=P;
					P=P.parent;
				}

				return P;
			}
		};

	this.predecessore = function(val)
		{
			var T=this.get(val);
			if (T==null)
			{
				return null;
			}

			if(T.sinistro!=null)
			{
				return T.sinistro.minNodo();
			}
			else
			{
				P=T.parent;
				while(P!=null && T === P.sinistro)
				{
					T=P;
					P=P.parent;
				}

				return P;
			}
		};

	this.toArray = function()
		{	
			var vtot=[];

			if(this==null)
			{
				return vtot;
			}	
			

			if (this.sinistro != null) 
			{
				vtot.push(this.sinistro.toArray());
			}

			vtot.push(this.valore);

			if (this.destro != null)
			{
				vtot.push(this.destro.toArray());
			}

			return vtot;
		};

	this.cancella = function(val)
		{
			var z=this.get(val);
			if (z!=null)
			{
				
				var y=null;
				var x=null;
				if ( (z.sinistro == null) || (z.destro == null) )
				{
					y=z;
				}
				else
				{
					y=this.successore(z.valore);
				}

				if (y.sinistro != null)
				{
					x=y.sinistro;
				}
				else
				{
					x=y.destro;
				}

				if(x!=null)
				{
					x.parent=y.parent;
				}

				if (y.parent==null)
				{
					this.sinistro=x.sinistro;
					this.destro=x.destro;
					this.valore=x.valore;
					this.parent=x.parent;
					this.info=x.info;
				}
				else
				{
					if(y.parent.sx==y)	
					{
						y.parent.sinistro=x;
					}
					else
					{
						y.parent.destro=x;
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
		};
}

