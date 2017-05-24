<?php

/* @ESFEspaceAbonne/Default/mesDemandes.html.twig */
class __TwigTemplate_377a0bcc3f32af97c70093f6e08f6b0d510fc833a62a704cfd22817d00396d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/mesDemandes.html.twig", 1);
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
        $__internal_de71c6056fd6a137a933031b87687025500dc10b94a80bc7a2e5426f5a8efd8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de71c6056fd6a137a933031b87687025500dc10b94a80bc7a2e5426f5a8efd8a->enter($__internal_de71c6056fd6a137a933031b87687025500dc10b94a80bc7a2e5426f5a8efd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesDemandes.html.twig"));

        $__internal_11a3fef7e2f961dbedbcf8d8761f05246bd31d72f5da8fbf2055576b0f0f4077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a3fef7e2f961dbedbcf8d8761f05246bd31d72f5da8fbf2055576b0f0f4077->enter($__internal_11a3fef7e2f961dbedbcf8d8761f05246bd31d72f5da8fbf2055576b0f0f4077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de71c6056fd6a137a933031b87687025500dc10b94a80bc7a2e5426f5a8efd8a->leave($__internal_de71c6056fd6a137a933031b87687025500dc10b94a80bc7a2e5426f5a8efd8a_prof);

        
        $__internal_11a3fef7e2f961dbedbcf8d8761f05246bd31d72f5da8fbf2055576b0f0f4077->leave($__internal_11a3fef7e2f961dbedbcf8d8761f05246bd31d72f5da8fbf2055576b0f0f4077_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_463288a50fd6a6a985b085ccf8c9969285a6207a2177aaa8e2d4b5514e5eeb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463288a50fd6a6a985b085ccf8c9969285a6207a2177aaa8e2d4b5514e5eeb03->enter($__internal_463288a50fd6a6a985b085ccf8c9969285a6207a2177aaa8e2d4b5514e5eeb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cf1e189944538491352dc1cf5725d040da384457ef7fdd5c2067dc581d11a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf1e189944538491352dc1cf5725d040da384457ef7fdd5c2067dc581d11a13->enter($__internal_0cf1e189944538491352dc1cf5725d040da384457ef7fdd5c2067dc581d11a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0cf1e189944538491352dc1cf5725d040da384457ef7fdd5c2067dc581d11a13->leave($__internal_0cf1e189944538491352dc1cf5725d040da384457ef7fdd5c2067dc581d11a13_prof);

        
        $__internal_463288a50fd6a6a985b085ccf8c9969285a6207a2177aaa8e2d4b5514e5eeb03->leave($__internal_463288a50fd6a6a985b085ccf8c9969285a6207a2177aaa8e2d4b5514e5eeb03_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_859aa8e2764a05669e9eb4d93daa39a9775f7341757095f8a6adc12549fdaca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859aa8e2764a05669e9eb4d93daa39a9775f7341757095f8a6adc12549fdaca1->enter($__internal_859aa8e2764a05669e9eb4d93daa39a9775f7341757095f8a6adc12549fdaca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a6e3fc3f196e75db0bede28d8177bb98427c0514e085a7f7f2373b082470c78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e3fc3f196e75db0bede28d8177bb98427c0514e085a7f7f2373b082470c78a->enter($__internal_a6e3fc3f196e75db0bede28d8177bb98427c0514e085a7f7f2373b082470c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_a6e3fc3f196e75db0bede28d8177bb98427c0514e085a7f7f2373b082470c78a->leave($__internal_a6e3fc3f196e75db0bede28d8177bb98427c0514e085a7f7f2373b082470c78a_prof);

        
        $__internal_859aa8e2764a05669e9eb4d93daa39a9775f7341757095f8a6adc12549fdaca1->leave($__internal_859aa8e2764a05669e9eb4d93daa39a9775f7341757095f8a6adc12549fdaca1_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3c0d1c99e7d77b781a09244ae2588c5f8df66b163e97769486db1cd9c1fbaf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0d1c99e7d77b781a09244ae2588c5f8df66b163e97769486db1cd9c1fbaf7b->enter($__internal_3c0d1c99e7d77b781a09244ae2588c5f8df66b163e97769486db1cd9c1fbaf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_15fc9ae4c287f4dfa85397741945a55ba80942aa4d382d4201d457e64f163bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fc9ae4c287f4dfa85397741945a55ba80942aa4d382d4201d457e64f163bfb->enter($__internal_15fc9ae4c287f4dfa85397741945a55ba80942aa4d382d4201d457e64f163bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
                                <div style=\"float:left;\">
                                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                        <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                    </a>
                                </div>
                                <div style=\"float:right;\">
                                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                        <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                    </a>
                                </div>                               
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                ";
        }
        // line 48
        echo "            </tbody>
        </table>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#demandeInsciption').DataTable( {
                responsive: true
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_15fc9ae4c287f4dfa85397741945a55ba80942aa4d382d4201d457e64f163bfb->leave($__internal_15fc9ae4c287f4dfa85397741945a55ba80942aa4d382d4201d457e64f163bfb_prof);

        
        $__internal_3c0d1c99e7d77b781a09244ae2588c5f8df66b163e97769486db1cd9c1fbaf7b->leave($__internal_3c0d1c99e7d77b781a09244ae2588c5f8df66b163e97769486db1cd9c1fbaf7b_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/mesDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  158 => 47,  145 => 40,  137 => 35,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                                <div style=\"float:left;\">
                                    <a href=\"{{ path('esf_espace_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                        <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                    </a>
                                </div>
                                <div style=\"float:right;\">
                                    <a href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                        <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                    </a>
                                </div>                               
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#demandeInsciption').DataTable( {
                responsive: true
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}", "@ESFEspaceAbonne/Default/mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\mesDemandes.html.twig");
    }
}
