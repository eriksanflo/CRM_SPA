using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class PagoEstatus
    {
        public int IdPagoEstatus { get; set; }
        public int? IdParteRole { get; set; }
        public int? IdEstatusPago { get; set; }
        public int? IdPago { get; set; }
        public DateTimeOffset? FechaRegistro { get; set; }

        public virtual EstatusPago IdEstatusPagoNavigation { get; set; }
        public virtual Pago IdPagoNavigation { get; set; }
        public virtual ParteRole IdParteRoleNavigation { get; set; }
    }
}
