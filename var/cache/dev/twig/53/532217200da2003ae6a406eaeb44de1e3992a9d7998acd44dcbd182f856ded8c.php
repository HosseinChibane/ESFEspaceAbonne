<?php

/* ESFEspaceAbonneBundle:back:detailsdemandes.html.twig */
class __TwigTemplate_66f05795832eb12c9f1eb9c67066048eed537462b836d5fd036c4825e819ae2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig", 1);
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
        $__internal_be92c38b8dd7d4ab2eaf85a18b1acf9708a2a9fb3db5b85383e5b086e4118fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be92c38b8dd7d4ab2eaf85a18b1acf9708a2a9fb3db5b85383e5b086e4118fbb->enter($__internal_be92c38b8dd7d4ab2eaf85a18b1acf9708a2a9fb3db5b85383e5b086e4118fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig"));

        $__internal_8b2005e67b21c851b27cb91b9a25b8b91fead672e941b6efa6fddfbb16e6846c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2005e67b21c851b27cb91b9a25b8b91fead672e941b6efa6fddfbb16e6846c->enter($__internal_8b2005e67b21c851b27cb91b9a25b8b91fead672e941b6efa6fddfbb16e6846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be92c38b8dd7d4ab2eaf85a18b1acf9708a2a9fb3db5b85383e5b086e4118fbb->leave($__internal_be92c38b8dd7d4ab2eaf85a18b1acf9708a2a9fb3db5b85383e5b086e4118fbb_prof);

        
        $__internal_8b2005e67b21c851b27cb91b9a25b8b91fead672e941b6efa6fddfbb16e6846c->leave($__internal_8b2005e67b21c851b27cb91b9a25b8b91fead672e941b6efa6fddfbb16e6846c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aec09b3716b044e01faaa754187ea8c0da8c15ad01d2ab1a7388dcd046ce63b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec09b3716b044e01faaa754187ea8c0da8c15ad01d2ab1a7388dcd046ce63b7->enter($__internal_aec09b3716b044e01faaa754187ea8c0da8c15ad01d2ab1a7388dcd046ce63b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02d5a046b3ae594ea1360efbcc14a5ed3f38a8826b86904f969ffab85c4fce77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d5a046b3ae594ea1360efbcc14a5ed3f38a8826b86904f969ffab85c4fce77->enter($__internal_02d5a046b3ae594ea1360efbcc14a5ed3f38a8826b86904f969ffab85c4fce77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_02d5a046b3ae594ea1360efbcc14a5ed3f38a8826b86904f969ffab85c4fce77->leave($__internal_02d5a046b3ae594ea1360efbcc14a5ed3f38a8826b86904f969ffab85c4fce77_prof);

        
        $__internal_aec09b3716b044e01faaa754187ea8c0da8c15ad01d2ab1a7388dcd046ce63b7->leave($__internal_aec09b3716b044e01faaa754187ea8c0da8c15ad01d2ab1a7388dcd046ce63b7_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8025d56f4967a3412ec56554fb39ec9c7fad9ce1abef20ed54f31599cbf83e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8025d56f4967a3412ec56554fb39ec9c7fad9ce1abef20ed54f31599cbf83e10->enter($__internal_8025d56f4967a3412ec56554fb39ec9c7fad9ce1abef20ed54f31599cbf83e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_09b7632eda53215b8204e92e1718e894769de3003361c66b209c9ecaf5358e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b7632eda53215b8204e92e1718e894769de3003361c66b209c9ecaf5358e43->enter($__internal_09b7632eda53215b8204e92e1718e894769de3003361c66b209c9ecaf5358e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_09b7632eda53215b8204e92e1718e894769de3003361c66b209c9ecaf5358e43->leave($__internal_09b7632eda53215b8204e92e1718e894769de3003361c66b209c9ecaf5358e43_prof);

        
        $__internal_8025d56f4967a3412ec56554fb39ec9c7fad9ce1abef20ed54f31599cbf83e10->leave($__internal_8025d56f4967a3412ec56554fb39ec9c7fad9ce1abef20ed54f31599cbf83e10_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_57f3eea44d1204dac2487209b2ae837614367b7fc3da2a89352b1709b2d60a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f3eea44d1204dac2487209b2ae837614367b7fc3da2a89352b1709b2d60a7e->enter($__internal_57f3eea44d1204dac2487209b2ae837614367b7fc3da2a89352b1709b2d60a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b32e9e9619b1f172e4deacdccb36ca18ac1337e0b5294f3006dd1b1fcc774081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32e9e9619b1f172e4deacdccb36ca18ac1337e0b5294f3006dd1b1fcc774081->enter($__internal_b32e9e9619b1f172e4deacdccb36ca18ac1337e0b5294f3006dd1b1fcc774081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_b32e9e9619b1f172e4deacdccb36ca18ac1337e0b5294f3006dd1b1fcc774081->leave($__internal_b32e9e9619b1f172e4deacdccb36ca18ac1337e0b5294f3006dd1b1fcc774081_prof);

        
        $__internal_57f3eea44d1204dac2487209b2ae837614367b7fc3da2a89352b1709b2d60a7e->leave($__internal_57f3eea44d1204dac2487209b2ae837614367b7fc3da2a89352b1709b2d60a7e_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/detailsdemandes.html.twig");
    }
}
