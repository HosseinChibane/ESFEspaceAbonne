<?php

/* @ESFEspaceAbonne/back/mesDemandes.html.twig */
class __TwigTemplate_2bcbc990381047aab07168b2873a2133ad2234cedc6e481c47067b79ecb0090c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesDemandes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6b3c1a55898d38c42f8770442b174cd349ec8d57042598d3f3c9afb7491c4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b3c1a55898d38c42f8770442b174cd349ec8d57042598d3f3c9afb7491c4f7->enter($__internal_f6b3c1a55898d38c42f8770442b174cd349ec8d57042598d3f3c9afb7491c4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $__internal_0378afc90318e53901473fe9f27f6ec509db4e297f5e0c071eb89306abddaa8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0378afc90318e53901473fe9f27f6ec509db4e297f5e0c071eb89306abddaa8e->enter($__internal_0378afc90318e53901473fe9f27f6ec509db4e297f5e0c071eb89306abddaa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b3c1a55898d38c42f8770442b174cd349ec8d57042598d3f3c9afb7491c4f7->leave($__internal_f6b3c1a55898d38c42f8770442b174cd349ec8d57042598d3f3c9afb7491c4f7_prof);

        
        $__internal_0378afc90318e53901473fe9f27f6ec509db4e297f5e0c071eb89306abddaa8e->leave($__internal_0378afc90318e53901473fe9f27f6ec509db4e297f5e0c071eb89306abddaa8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a85e34856c16b7c68595f598d3bf5d40b55e251e4682ac3271fd06b1dfb0999b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85e34856c16b7c68595f598d3bf5d40b55e251e4682ac3271fd06b1dfb0999b->enter($__internal_a85e34856c16b7c68595f598d3bf5d40b55e251e4682ac3271fd06b1dfb0999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_557bdc1893736a45e37b0e819f1579f73d014e297a74b7aad7743ca2f3b42da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557bdc1893736a45e37b0e819f1579f73d014e297a74b7aad7743ca2f3b42da0->enter($__internal_557bdc1893736a45e37b0e819f1579f73d014e297a74b7aad7743ca2f3b42da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_557bdc1893736a45e37b0e819f1579f73d014e297a74b7aad7743ca2f3b42da0->leave($__internal_557bdc1893736a45e37b0e819f1579f73d014e297a74b7aad7743ca2f3b42da0_prof);

        
        $__internal_a85e34856c16b7c68595f598d3bf5d40b55e251e4682ac3271fd06b1dfb0999b->leave($__internal_a85e34856c16b7c68595f598d3bf5d40b55e251e4682ac3271fd06b1dfb0999b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_acca07878f63a287d8ff6b0030c82f38f965e270840db37e318cd0a92a5647ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acca07878f63a287d8ff6b0030c82f38f965e270840db37e318cd0a92a5647ed->enter($__internal_acca07878f63a287d8ff6b0030c82f38f965e270840db37e318cd0a92a5647ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_1544355681cb324fe0a976cd3d1ff329cb5ddc7f4352c3933f2460f5535f0684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1544355681cb324fe0a976cd3d1ff329cb5ddc7f4352c3933f2460f5535f0684->enter($__internal_1544355681cb324fe0a976cd3d1ff329cb5ddc7f4352c3933f2460f5535f0684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_1544355681cb324fe0a976cd3d1ff329cb5ddc7f4352c3933f2460f5535f0684->leave($__internal_1544355681cb324fe0a976cd3d1ff329cb5ddc7f4352c3933f2460f5535f0684_prof);

        
        $__internal_acca07878f63a287d8ff6b0030c82f38f965e270840db37e318cd0a92a5647ed->leave($__internal_acca07878f63a287d8ff6b0030c82f38f965e270840db37e318cd0a92a5647ed_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0afbf7f27470d28f15ec1eabbe6c49ab9c5791417ff49fdf7545d9c48fa07767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afbf7f27470d28f15ec1eabbe6c49ab9c5791417ff49fdf7545d9c48fa07767->enter($__internal_0afbf7f27470d28f15ec1eabbe6c49ab9c5791417ff49fdf7545d9c48fa07767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4e2d9ae6e90c480e8f56cfb31b5e0550b55f84f1498cf10f0a17a55900c22b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2d9ae6e90c480e8f56cfb31b5e0550b55f84f1498cf10f0a17a55900c22b53->enter($__internal_4e2d9ae6e90c480e8f56cfb31b5e0550b55f84f1498cf10f0a17a55900c22b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        if (array_key_exists("listDemandeInscription", $context)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listDemandeInscription"] ?? $this->getContext($context, "listDemandeInscription")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowDemande"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "type", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "etat", array()), "html", null, true);
                echo "</td>
                            <td>           
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        // line 44
        echo "            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
";
        
        $__internal_4e2d9ae6e90c480e8f56cfb31b5e0550b55f84f1498cf10f0a17a55900c22b53->leave($__internal_4e2d9ae6e90c480e8f56cfb31b5e0550b55f84f1498cf10f0a17a55900c22b53_prof);

        
        $__internal_0afbf7f27470d28f15ec1eabbe6c49ab9c5791417ff49fdf7545d9c48fa07767->leave($__internal_0afbf7f27470d28f15ec1eabbe6c49ab9c5791417ff49fdf7545d9c48fa07767_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  154 => 43,  142 => 37,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Mes Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% if listDemandeInscription is defined %}
                    {% for rowDemande in listDemandeInscription %}
                        <tr>
                            <td>{{rowDemande.id}}</td>
                            <td>{{rowDemande.type}}</td>
                            <td>{{rowDemande.etat}}</td>
                            <td>           
                                <a href=\"{{ path('esf_espace_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
{% endblock %}", "@ESFEspaceAbonne/back/mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesDemandes.html.twig");
    }
}
