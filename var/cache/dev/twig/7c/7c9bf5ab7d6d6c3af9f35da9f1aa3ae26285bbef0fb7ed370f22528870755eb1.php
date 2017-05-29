<?php

/* ESFEspaceAbonneBundle:Back:monprofil.html.twig */
class __TwigTemplate_fc0eb36a8530b78a7e3eb85bdb111d55edd4f22a32e3c3c53f2a8a67ca52c7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:monprofil.html.twig", 1);
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
        $__internal_cbf1d90a083c89ef24346b619f1cdfd14f28f6bb91f262bc600eb676feccbe5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf1d90a083c89ef24346b619f1cdfd14f28f6bb91f262bc600eb676feccbe5e->enter($__internal_cbf1d90a083c89ef24346b619f1cdfd14f28f6bb91f262bc600eb676feccbe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:monprofil.html.twig"));

        $__internal_7c869aaa73b353cc1b76beae254810959d7e37624cfae55d53a02065bb9e65b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c869aaa73b353cc1b76beae254810959d7e37624cfae55d53a02065bb9e65b0->enter($__internal_7c869aaa73b353cc1b76beae254810959d7e37624cfae55d53a02065bb9e65b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:monprofil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf1d90a083c89ef24346b619f1cdfd14f28f6bb91f262bc600eb676feccbe5e->leave($__internal_cbf1d90a083c89ef24346b619f1cdfd14f28f6bb91f262bc600eb676feccbe5e_prof);

        
        $__internal_7c869aaa73b353cc1b76beae254810959d7e37624cfae55d53a02065bb9e65b0->leave($__internal_7c869aaa73b353cc1b76beae254810959d7e37624cfae55d53a02065bb9e65b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ad09fa117b8370230405a9e0d8aeec4ac43694c9ad891daa9b498d21cb9bcd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad09fa117b8370230405a9e0d8aeec4ac43694c9ad891daa9b498d21cb9bcd3->enter($__internal_5ad09fa117b8370230405a9e0d8aeec4ac43694c9ad891daa9b498d21cb9bcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1aaefd8224b3d7b307ab2b6f70f2dc4f3495bfa1749631035b6a973b01aebcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1aaefd8224b3d7b307ab2b6f70f2dc4f3495bfa1749631035b6a973b01aebcc->enter($__internal_f1aaefd8224b3d7b307ab2b6f70f2dc4f3495bfa1749631035b6a973b01aebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mon Profil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1aaefd8224b3d7b307ab2b6f70f2dc4f3495bfa1749631035b6a973b01aebcc->leave($__internal_f1aaefd8224b3d7b307ab2b6f70f2dc4f3495bfa1749631035b6a973b01aebcc_prof);

        
        $__internal_5ad09fa117b8370230405a9e0d8aeec4ac43694c9ad891daa9b498d21cb9bcd3->leave($__internal_5ad09fa117b8370230405a9e0d8aeec4ac43694c9ad891daa9b498d21cb9bcd3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d96daabbd221995c44bd230e9cf05a8c18cf511fc5604d254dac3bb19d281afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96daabbd221995c44bd230e9cf05a8c18cf511fc5604d254dac3bb19d281afa->enter($__internal_d96daabbd221995c44bd230e9cf05a8c18cf511fc5604d254dac3bb19d281afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_d930628e0b5e194508fb221cdc9e5107f9b805cbd2cee23248e13f2c6a085273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d930628e0b5e194508fb221cdc9e5107f9b805cbd2cee23248e13f2c6a085273->enter($__internal_d930628e0b5e194508fb221cdc9e5107f9b805cbd2cee23248e13f2c6a085273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
";
        
        $__internal_d930628e0b5e194508fb221cdc9e5107f9b805cbd2cee23248e13f2c6a085273->leave($__internal_d930628e0b5e194508fb221cdc9e5107f9b805cbd2cee23248e13f2c6a085273_prof);

        
        $__internal_d96daabbd221995c44bd230e9cf05a8c18cf511fc5604d254dac3bb19d281afa->leave($__internal_d96daabbd221995c44bd230e9cf05a8c18cf511fc5604d254dac3bb19d281afa_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f14316ddf4c532f49101f8abf7b16ab0bbcd6fc240d3d210ef521078291b7c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14316ddf4c532f49101f8abf7b16ab0bbcd6fc240d3d210ef521078291b7c7b->enter($__internal_f14316ddf4c532f49101f8abf7b16ab0bbcd6fc240d3d210ef521078291b7c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_43676f64f9b1b71ad991afc63af627314ec7b00d98f7cfc71207d47f28579788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43676f64f9b1b71ad991afc63af627314ec7b00d98f7cfc71207d47f28579788->enter($__internal_43676f64f9b1b71ad991afc63af627314ec7b00d98f7cfc71207d47f28579788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"form-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 17
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <strong> ";
            // line 18
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </strong> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        <!-- Mon profil -->
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 24
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 25
            echo "            <div class=\"alert alert-error\">
                ";
            // line 26
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "

                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'label', array("label" => "Date de naissance"));
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'widget');
        echo "

                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'label', array("label" => "Numéro de la rue"));
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'errors');
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'widget');
        echo "

                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'label', array("label" => "Code Postal"));
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'widget');
        echo "

                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'label', array("label" => "Pays"));
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'errors');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'widget');
        echo "

                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'label', array("label" => "Téléphone fixe"));
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'errors');
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'widget');
        echo "

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "

                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'label', array("label" => "Numéro de carte d'identité"));
        echo "
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'errors');
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'widget');
        echo "

                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'label', array("label" => "Nom de la rue"));
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'errors');
        echo "
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'widget');
        echo "

                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'label', array("label" => "Ville"));
        echo "
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'errors');
        echo "
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'widget');
        echo "

                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'label', array("label" => "Email"));
        echo "
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'errors');
        echo "
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'widget');
        echo "

                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'label', array("label" => "Portable"));
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'errors');
        echo "
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'widget');
        echo "

            </div>
        </div>
        ";
        // line 89
        if (array_key_exists("imageUser", $context)) {
            echo "  
          <div class=\"col-md-4\">
            <div class=\"form-group\">
                ";
            // line 93
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageName", array()), "html", null, true);
            echo "\" />
            </div>
        </div>
    ";
        }
        // line 97
        echo "    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <div class=\"vich-image\">
                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), "imageFile", array()), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            ";
        // line 107
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enregistrer", array()), 'widget');
        echo "
        </div>
    </div>
</div>
";
        // line 112
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_43676f64f9b1b71ad991afc63af627314ec7b00d98f7cfc71207d47f28579788->leave($__internal_43676f64f9b1b71ad991afc63af627314ec7b00d98f7cfc71207d47f28579788_prof);

        
        $__internal_f14316ddf4c532f49101f8abf7b16ab0bbcd6fc240d3d210ef521078291b7c7b->leave($__internal_f14316ddf4c532f49101f8abf7b16ab0bbcd6fc240d3d210ef521078291b7c7b_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:monprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 112,  342 => 108,  337 => 107,  328 => 100,  323 => 97,  313 => 93,  307 => 89,  300 => 85,  296 => 84,  292 => 83,  287 => 81,  283 => 80,  279 => 79,  274 => 77,  270 => 76,  266 => 75,  261 => 73,  257 => 72,  253 => 71,  248 => 69,  244 => 68,  240 => 67,  235 => 65,  231 => 64,  227 => 63,  216 => 55,  212 => 54,  208 => 53,  203 => 51,  199 => 50,  195 => 49,  190 => 47,  186 => 46,  182 => 45,  177 => 43,  173 => 42,  169 => 41,  164 => 39,  160 => 38,  156 => 37,  151 => 35,  147 => 34,  143 => 33,  137 => 29,  131 => 26,  128 => 25,  126 => 24,  121 => 22,  118 => 21,  109 => 18,  106 => 17,  102 => 16,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Mon Profil - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
{% endblock %}

{% block Content %} 
    <div class=\"form-group\">
        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-success\" role=\"alert\">
                <strong> {{ flash_message }} </strong> 
            </div>
        {% endfor %}
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
        {% if imageUser is defined %}  
          <div class=\"col-md-4\">
            <div class=\"form-group\">
                {# | imagine_filter('my_thumb') #}
                <img src=\"{{ vich_uploader_asset(imageUser, 'imageFile' )   }}\" alt=\"{{ imageUser.imageName }}\" />
            </div>
        </div>
    {% endif %}
    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <div class=\"vich-image\">
                {{ form_widget(form.image.imageFile.file) }}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            {# TOKEN #}
            {{ form_widget(form._token) }}
            {{ form_widget(form.enregistrer) }}
        </div>
    </div>
</div>
{{ form_end(form, {'render_rest': false}) }}
{% endblock %}", "ESFEspaceAbonneBundle:Back:monprofil.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/monprofil.html.twig");
    }
}
