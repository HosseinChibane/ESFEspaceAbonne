<?php

/* ESFEspaceAbonneBundle:Default:monprofil.html.twig */
class __TwigTemplate_531ed28f804b62891354cd30470db9631bfc975ef9e3c69c2717bdc9482b3024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:monprofil.html.twig", 2);
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
        $__internal_af34911643e5c35fe8b2817eede70f54020e8514963ca464b15af97316296a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af34911643e5c35fe8b2817eede70f54020e8514963ca464b15af97316296a6d->enter($__internal_af34911643e5c35fe8b2817eede70f54020e8514963ca464b15af97316296a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:monprofil.html.twig"));

        $__internal_73d06480477de16ed6e130385691004fe798e9f50f567971b36d75f83ec74c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d06480477de16ed6e130385691004fe798e9f50f567971b36d75f83ec74c6a->enter($__internal_73d06480477de16ed6e130385691004fe798e9f50f567971b36d75f83ec74c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:monprofil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af34911643e5c35fe8b2817eede70f54020e8514963ca464b15af97316296a6d->leave($__internal_af34911643e5c35fe8b2817eede70f54020e8514963ca464b15af97316296a6d_prof);

        
        $__internal_73d06480477de16ed6e130385691004fe798e9f50f567971b36d75f83ec74c6a->leave($__internal_73d06480477de16ed6e130385691004fe798e9f50f567971b36d75f83ec74c6a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_682195935131557b3c75c3dcf54a13ba5fe3e8cf0d8c5415afd26230ae1545b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682195935131557b3c75c3dcf54a13ba5fe3e8cf0d8c5415afd26230ae1545b3->enter($__internal_682195935131557b3c75c3dcf54a13ba5fe3e8cf0d8c5415afd26230ae1545b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c96f1b9d0650bdf438ccb3ec8a499ae65bb617d67986971379ac2953598673d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c96f1b9d0650bdf438ccb3ec8a499ae65bb617d67986971379ac2953598673d->enter($__internal_0c96f1b9d0650bdf438ccb3ec8a499ae65bb617d67986971379ac2953598673d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Mon Profil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c96f1b9d0650bdf438ccb3ec8a499ae65bb617d67986971379ac2953598673d->leave($__internal_0c96f1b9d0650bdf438ccb3ec8a499ae65bb617d67986971379ac2953598673d_prof);

        
        $__internal_682195935131557b3c75c3dcf54a13ba5fe3e8cf0d8c5415afd26230ae1545b3->leave($__internal_682195935131557b3c75c3dcf54a13ba5fe3e8cf0d8c5415afd26230ae1545b3_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2d072d523acd7a3a900eccfe526f89db0f3f5a237e2663fe0a158de773ca46c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d072d523acd7a3a900eccfe526f89db0f3f5a237e2663fe0a158de773ca46c1->enter($__internal_2d072d523acd7a3a900eccfe526f89db0f3f5a237e2663fe0a158de773ca46c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_09dec034c4e308adefaaa59b85f0416ed934465d15be170b212866efe65ed5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dec034c4e308adefaaa59b85f0416ed934465d15be170b212866efe65ed5b6->enter($__internal_09dec034c4e308adefaaa59b85f0416ed934465d15be170b212866efe65ed5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 9
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
";
        
        $__internal_09dec034c4e308adefaaa59b85f0416ed934465d15be170b212866efe65ed5b6->leave($__internal_09dec034c4e308adefaaa59b85f0416ed934465d15be170b212866efe65ed5b6_prof);

        
        $__internal_2d072d523acd7a3a900eccfe526f89db0f3f5a237e2663fe0a158de773ca46c1->leave($__internal_2d072d523acd7a3a900eccfe526f89db0f3f5a237e2663fe0a158de773ca46c1_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3a06364cee3e135e3a4fd938208451a93e88b0fbf9dea9c0c83f2a04cbd707ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a06364cee3e135e3a4fd938208451a93e88b0fbf9dea9c0c83f2a04cbd707ef->enter($__internal_3a06364cee3e135e3a4fd938208451a93e88b0fbf9dea9c0c83f2a04cbd707ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_ca1ddc507808d0470afcd0ba1507f7b150ee8991d4ab2de36796367b2235541d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1ddc507808d0470afcd0ba1507f7b150ee8991d4ab2de36796367b2235541d->enter($__internal_ca1ddc507808d0470afcd0ba1507f7b150ee8991d4ab2de36796367b2235541d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Mon profil -->
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 19
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 20
            echo "        <div class=\"alert alert-error\">
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 24
        echo "
    <div class=\"col-md-4\">
        <div class=\"form-group\">

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "

            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'label', array("label" => "Date de naissance"));
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'widget');
        echo "

            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'label', array("label" => "Numéro de la rue"));
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'widget');
        echo "

            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'label', array("label" => "Code Postal"));
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'widget');
        echo "

            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'label', array("label" => "Pays"));
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'errors');
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'widget');
        echo "

            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'label', array("label" => "Téléphone fixe"));
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'errors');
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'widget');
        echo "

        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"form-group\">

            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "

            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'label', array("label" => "Numéro de carte d'identité"));
        echo "
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'errors');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'widget');
        echo "

            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'label', array("label" => "Nom de la rue"));
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'errors');
        echo "
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'widget');
        echo "

            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'label', array("label" => "Ville"));
        echo "
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'errors');
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'widget');
        echo "

            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'label', array("label" => "Email"));
        echo "
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'errors');
        echo "
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'widget');
        echo "

            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'label', array("label" => "Portable"));
        echo "
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'widget');
        echo "
            
        </div>
    </div>

    <div class=\"col-md-2\">
        <div class=\"form-group\">
            <div class=\"vich-image\">
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
            </div>
            ";
        // line 91
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            <div class=\"form-group\">
                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 98
            echo "                    <div class=\"flash-notice\">
                        ";
            // line 99
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enregistrer", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

";
        
        $__internal_ca1ddc507808d0470afcd0ba1507f7b150ee8991d4ab2de36796367b2235541d->leave($__internal_ca1ddc507808d0470afcd0ba1507f7b150ee8991d4ab2de36796367b2235541d_prof);

        
        $__internal_3a06364cee3e135e3a4fd938208451a93e88b0fbf9dea9c0c83f2a04cbd707ef->leave($__internal_3a06364cee3e135e3a4fd938208451a93e88b0fbf9dea9c0c83f2a04cbd707ef_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:monprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 106,  323 => 102,  314 => 99,  311 => 98,  307 => 97,  297 => 91,  292 => 88,  281 => 80,  277 => 79,  273 => 78,  268 => 76,  264 => 75,  260 => 74,  255 => 72,  251 => 71,  247 => 70,  242 => 68,  238 => 67,  234 => 66,  229 => 64,  225 => 63,  221 => 62,  216 => 60,  212 => 59,  208 => 58,  197 => 50,  193 => 49,  189 => 48,  184 => 46,  180 => 45,  176 => 44,  171 => 42,  167 => 41,  163 => 40,  158 => 38,  154 => 37,  150 => 36,  145 => 34,  141 => 33,  137 => 32,  132 => 30,  128 => 29,  124 => 28,  118 => 24,  112 => 21,  109 => 20,  107 => 19,  102 => 17,  90 => 15,  76 => 10,  73 => 9,  64 => 8,  51 => 5,  42 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}#}
{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Mon Profil - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Mon profil -->
    {{ form_start(form) }}

    {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
            {{ form_errors(form) }}
        </div>
    {% endif %}

    <div class=\"col-md-4\">
        <div class=\"form-group\">

            {{ form_label(form.nom, 'Nom') }}
            {{ form_errors(form.nom) }}
            {{ form_widget(form.nom) }}

            {{ form_label(form.datenaissance, 'Date de naissance') }}
            {{ form_errors(form.datenaissance) }}
            {{ form_widget(form.datenaissance) }}

            {{ form_label(form.personne.numero, 'Numéro de la rue') }}
            {{ form_errors(form.personne.numero) }}
            {{ form_widget(form.personne.numero) }}

            {{ form_label(form.personne.codepostal, 'Code Postal') }}
            {{ form_errors(form.personne.codepostal) }}
            {{ form_widget(form.personne.codepostal) }}

            {{ form_label(form.personne.pays, 'Pays') }}
            {{ form_errors(form.personne.pays) }}
            {{ form_widget(form.personne.pays) }}

            {{ form_label(form.personne.telephone, 'Téléphone fixe') }}
            {{ form_errors(form.personne.telephone) }}
            {{ form_widget(form.personne.telephone) }}

        </div>
    </div>

    <div class=\"col-md-4\">
        <div class=\"form-group\">

            {{ form_label(form.prenom, 'Prénom') }}
            {{ form_errors(form.prenom) }}
            {{ form_widget(form.prenom) }}

            {{ form_label(form.numerocarteid, 'Numéro de carte d\\'identité') }}
            {{ form_errors(form.numerocarteid) }}
            {{ form_widget(form.numerocarteid) }}

            {{ form_label(form.personne.rue, 'Nom de la rue') }}
            {{ form_errors(form.personne.rue) }}
            {{ form_widget(form.personne.rue) }}

            {{ form_label(form.personne.ville, 'Ville') }}
            {{ form_errors(form.personne.ville) }}
            {{ form_widget(form.personne.ville) }}

            {{ form_label(form.personne.courriel, 'Email') }}
            {{ form_errors(form.personne.courriel) }}
            {{ form_widget(form.personne.courriel) }}

            {{ form_label(form.personne.gsm, 'Portable') }}
            {{ form_errors(form.personne.gsm) }}
            {{ form_widget(form.personne.gsm) }}
            
        </div>
    </div>

    <div class=\"col-md-2\">
        <div class=\"form-group\">
            <div class=\"vich-image\">
                {{ form_widget(form.image) }}
            </div>
            {# Token CSRF #}
            {{ form_widget(form._token) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            <div class=\"form-group\">
                {% for flash_message in app.session.flashBag.get('notice') %}
                    <div class=\"flash-notice\">
                        {{ flash_message }}
                    </div>
                {% endfor %}
                {{ form_widget(form.enregistrer) }}
            </div>
        </div>
    </div>
    {{ form_end(form, {'render_rest': false}) }}

{% endblock %}", "ESFEspaceAbonneBundle:Default:monprofil.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/monprofil.html.twig");
    }
}
