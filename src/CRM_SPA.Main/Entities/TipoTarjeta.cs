﻿using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class TipoTarjeta
    {
        public TipoTarjeta()
        {
            TarjetaCliente = new HashSet<TarjetaCliente>();
        }

        public int IdTipoTarjeta { get; set; }
        public string Nombre { get; set; }
        public bool? Activo { get; set; }

        public virtual ICollection<TarjetaCliente> TarjetaCliente { get; set; }
    }
}
