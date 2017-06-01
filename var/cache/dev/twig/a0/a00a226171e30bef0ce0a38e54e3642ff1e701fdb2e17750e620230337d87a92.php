<?php

/* @ESFEspaceAbonne/back/detailsdemandes.html.twig */
class __TwigTemplate_5122f7314bd6f51d71c9b4be8dcbbf1672b9c7129e1bfb96dfd6131e68df3aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/detailsdemandes.html.twig", 1);
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
        $__internal_be12acf619f83a021759418621a50a6172072a058edf5ba40ba8c198594f2df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be12acf619f83a021759418621a50a6172072a058edf5ba40ba8c198594f2df3->enter($__internal_be12acf619f83a021759418621a50a6172072a058edf5ba40ba8c198594f2df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $__internal_ee1d3f150303ebd0617da4e575552fde585ac3253cbbca9f843f3b423cbc7ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1d3f150303ebd0617da4e575552fde585ac3253cbbca9f843f3b423cbc7ce4->enter($__internal_ee1d3f150303ebd0617da4e575552fde585ac3253cbbca9f843f3b423cbc7ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be12acf619f83a021759418621a50a6172072a058edf5ba40ba8c198594f2df3->leave($__internal_be12acf619f83a021759418621a50a6172072a058edf5ba40ba8c198594f2df3_prof);

        
        $__internal_ee1d3f150303ebd0617da4e575552fde585ac3253cbbca9f843f3b423cbc7ce4->leave($__internal_ee1d3f150303ebd0617da4e575552fde585ac3253cbbca9f843f3b423cbc7ce4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0665ac920e709f1395bdccc6ffcb144fba60e965a7f7674d7326750f9a8cae26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0665ac920e709f1395bdccc6ffcb144fba60e965a7f7674d7326750f9a8cae26->enter($__internal_0665ac920e709f1395bdccc6ffcb144fba60e965a7f7674d7326750f9a8cae26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e9b1bf564c6acddac42e18b81b0410f206bebbb05e74b718232eb74bb4e08be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9b1bf564c6acddac42e18b81b0410f206bebbb05e74b718232eb74bb4e08be->enter($__internal_6e9b1bf564c6acddac42e18b81b0410f206bebbb05e74b718232eb74bb4e08be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6e9b1bf564c6acddac42e18b81b0410f206bebbb05e74b718232eb74bb4e08be->leave($__internal_6e9b1bf564c6acddac42e18b81b0410f206bebbb05e74b718232eb74bb4e08be_prof);

        
        $__internal_0665ac920e709f1395bdccc6ffcb144fba60e965a7f7674d7326750f9a8cae26->leave($__internal_0665ac920e709f1395bdccc6ffcb144fba60e965a7f7674d7326750f9a8cae26_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_796239467d102727b93db97c67507b4273016ed63579302265e28ce221c9f2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796239467d102727b93db97c67507b4273016ed63579302265e28ce221c9f2b3->enter($__internal_796239467d102727b93db97c67507b4273016ed63579302265e28ce221c9f2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_81499d9b0701c2496a35a721dfecdd3a8fd03b843b014a09f1c46d0dfb6b707f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81499d9b0701c2496a35a721dfecdd3a8fd03b843b014a09f1c46d0dfb6b707f->enter($__internal_81499d9b0701c2496a35a721dfecdd3a8fd03b843b014a09f1c46d0dfb6b707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\">Mes Demandes</a></li>
        <li class=\"active\">Détails</li>
    </ol>
";
        
        $__internal_81499d9b0701c2496a35a721dfecdd3a8fd03b843b014a09f1c46d0dfb6b707f->leave($__internal_81499d9b0701c2496a35a721dfecdd3a8fd03b843b014a09f1c46d0dfb6b707f_prof);

        
        $__internal_796239467d102727b93db97c67507b4273016ed63579302265e28ce221c9f2b3->leave($__internal_796239467d102727b93db97c67507b4273016ed63579302265e28ce221c9f2b3_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1870d783506a34d316bb450d061e1f265b45d4a58e9ec8849ffdf654dffe38d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1870d783506a34d316bb450d061e1f265b45d4a58e9ec8849ffdf654dffe38d1->enter($__internal_1870d783506a34d316bb450d061e1f265b45d4a58e9ec8849ffdf654dffe38d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_aebb4967e54f71d9819e79b2d9d8a00989ac33826b67fc303cf0d18daa874192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebb4967e54f71d9819e79b2d9d8a00989ac33826b67fc303cf0d18daa874192->enter($__internal_aebb4967e54f71d9819e79b2d9d8a00989ac33826b67fc303cf0d18daa874192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">    
                Type d'inscription : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "type", array()), "html", null, true);
        echo "<br>                                    
                Etat de l'inscription : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etat", array()), "html", null, true);
        echo "<br>
                
                ";
        // line 24
        if ($this->getAttribute(($context["eA_Demande_Inscription"] ?? null), "etablissement", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            if (($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etablissement", array()) != null)) {
                // line 26
                echo "                        Etablissement de l'Inscription : ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etablissement", array()), "html", null, true);
                echo "<br>
                        Formation de l'Inscription : ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "formation", array()), "html", null, true);
                echo "<br>
                        Langue de l'Inscription : ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "langue", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 30
            echo "                ";
        } elseif ($this->getAttribute(($context["edit_form"] ?? null), "partenaire", array(), "any", true, true)) {
            // line 31
            echo "                    ";
            if (($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "partenaire", array()) != null)) {
                // line 32
                echo "                        Partenaire de l'Inscription : ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "partenaire", array()), "html", null, true);
                echo "<br>
                    ";
            }
            // line 34
            echo "                ";
        }
        // line 35
        echo "                <object type=\"application/pdf\" width=\"100%\" height=\"400px\">
                    <param name=\"src\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "documentinscription", array()), "pdfFile"), "html", null, true);
        echo "\" />
                    <p>Il semble que votre navigateur Web n'est pas configuré pour afficher les fichiers PDF.
                      Pas de soucis, juste <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "documentinscription", array()), "pdfFile"), "html", null, true);
        echo "\">Cliquez ici pour télécharger le fichier PDF.</a>
                  </p>
              </object>
          </div>
          <div class=\"panel-footer\">
            <a class=\"btn btn-info\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>                
            <a class=\"btn btn-primary\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>                
        </div>
    </div>
</div>

";
        
        $__internal_aebb4967e54f71d9819e79b2d9d8a00989ac33826b67fc303cf0d18daa874192->leave($__internal_aebb4967e54f71d9819e79b2d9d8a00989ac33826b67fc303cf0d18daa874192_prof);

        
        $__internal_1870d783506a34d316bb450d061e1f265b45d4a58e9ec8849ffdf654dffe38d1->leave($__internal_1870d783506a34d316bb450d061e1f265b45d4a58e9ec8849ffdf654dffe38d1_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/detailsdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 44,  172 => 43,  164 => 38,  159 => 36,  156 => 35,  153 => 34,  147 => 32,  144 => 31,  141 => 30,  136 => 28,  132 => 27,  127 => 26,  124 => 25,  122 => 24,  117 => 22,  113 => 21,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Détails Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li ><a href=\"{{ path('esf_espace_abonne_mesDemandes') }}\">Mes Demandes</a></li>
        <li class=\"active\">Détails</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°{{ eA_Demande_Inscription.id }} :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">    
                Type d'inscription : {{ eA_Demande_Inscription.type }}<br>                                    
                Etat de l'inscription : {{ eA_Demande_Inscription.etat }}<br>
                
                {% if eA_Demande_Inscription.etablissement is defined %}
                    {% if eA_Demande_Inscription.etablissement != null %}
                        Etablissement de l'Inscription : {{ eA_Demande_Inscription.etablissement }}<br>
                        Formation de l'Inscription : {{ eA_Demande_Inscription.formation }}<br>
                        Langue de l'Inscription : {{ eA_Demande_Inscription.langue }}<br>
                    {% endif %}
                {% elseif  edit_form.partenaire is defined %}
                    {% if eA_Demande_Inscription.partenaire != null %}
                        Partenaire de l'Inscription : {{ eA_Demande_Inscription.partenaire }}<br>
                    {% endif %}
                {% endif %}
                <object type=\"application/pdf\" width=\"100%\" height=\"400px\">
                    <param name=\"src\" value=\"{{ vich_uploader_asset(eA_Demande_Inscription.documentinscription, 'pdfFile' ) }}\" />
                    <p>Il semble que votre navigateur Web n'est pas configuré pour afficher les fichiers PDF.
                      Pas de soucis, juste <a href=\"{{ vich_uploader_asset(eA_Demande_Inscription.documentinscription, 'pdfFile' ) }}\">Cliquez ici pour télécharger le fichier PDF.</a>
                  </p>
              </object>
          </div>
          <div class=\"panel-footer\">
            <a class=\"btn btn-info\" href=\"{{ path('esf_espace_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>                
            <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id': eA_Demande_Inscription.id }) }}\">Modifier</a>                
        </div>
    </div>
</div>

{% endblock %}", "@ESFEspaceAbonne/back/detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\detailsdemandes.html.twig");
    }
}
