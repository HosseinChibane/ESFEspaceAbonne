<?php

/* ESFEspaceAbonneBundle:back:monProfil.html.twig */
class __TwigTemplate_3f270662c436a63ad953df80a05352b34eb79774d7dedad3946361c949f6c35a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:monProfil.html.twig", 1);
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
        $__internal_ce9a07d04456f8c1aaebe62be216a50f54a3252e5a2caf1516578844a1f9d132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9a07d04456f8c1aaebe62be216a50f54a3252e5a2caf1516578844a1f9d132->enter($__internal_ce9a07d04456f8c1aaebe62be216a50f54a3252e5a2caf1516578844a1f9d132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:monProfil.html.twig"));

        $__internal_dd18565acc92b46c3c957ec1a65b4fb09b635d77ae707298db488edce0e52dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd18565acc92b46c3c957ec1a65b4fb09b635d77ae707298db488edce0e52dff->enter($__internal_dd18565acc92b46c3c957ec1a65b4fb09b635d77ae707298db488edce0e52dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:monProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce9a07d04456f8c1aaebe62be216a50f54a3252e5a2caf1516578844a1f9d132->leave($__internal_ce9a07d04456f8c1aaebe62be216a50f54a3252e5a2caf1516578844a1f9d132_prof);

        
        $__internal_dd18565acc92b46c3c957ec1a65b4fb09b635d77ae707298db488edce0e52dff->leave($__internal_dd18565acc92b46c3c957ec1a65b4fb09b635d77ae707298db488edce0e52dff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ba3fa783ca91d4c77ace5db35bc345684db4839b1b63ecbe7442dcd3e799d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba3fa783ca91d4c77ace5db35bc345684db4839b1b63ecbe7442dcd3e799d28->enter($__internal_3ba3fa783ca91d4c77ace5db35bc345684db4839b1b63ecbe7442dcd3e799d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b335944ba547a46739a76c18ecb0dd412b4468e960bad2aca5f76e7b42d45d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b335944ba547a46739a76c18ecb0dd412b4468e960bad2aca5f76e7b42d45d7->enter($__internal_9b335944ba547a46739a76c18ecb0dd412b4468e960bad2aca5f76e7b42d45d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mon Profil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9b335944ba547a46739a76c18ecb0dd412b4468e960bad2aca5f76e7b42d45d7->leave($__internal_9b335944ba547a46739a76c18ecb0dd412b4468e960bad2aca5f76e7b42d45d7_prof);

        
        $__internal_3ba3fa783ca91d4c77ace5db35bc345684db4839b1b63ecbe7442dcd3e799d28->leave($__internal_3ba3fa783ca91d4c77ace5db35bc345684db4839b1b63ecbe7442dcd3e799d28_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5a079a1af18ad51a2e9fbdd93d33639049aa8677e5411adbd9694e4914499d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a079a1af18ad51a2e9fbdd93d33639049aa8677e5411adbd9694e4914499d6e->enter($__internal_5a079a1af18ad51a2e9fbdd93d33639049aa8677e5411adbd9694e4914499d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_7367c78499274d6e3b507d5ea0832ca96faf39812b170003ac99019d4dc2722a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7367c78499274d6e3b507d5ea0832ca96faf39812b170003ac99019d4dc2722a->enter($__internal_7367c78499274d6e3b507d5ea0832ca96faf39812b170003ac99019d4dc2722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
";
        
        $__internal_7367c78499274d6e3b507d5ea0832ca96faf39812b170003ac99019d4dc2722a->leave($__internal_7367c78499274d6e3b507d5ea0832ca96faf39812b170003ac99019d4dc2722a_prof);

        
        $__internal_5a079a1af18ad51a2e9fbdd93d33639049aa8677e5411adbd9694e4914499d6e->leave($__internal_5a079a1af18ad51a2e9fbdd93d33639049aa8677e5411adbd9694e4914499d6e_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a6fbc1ab809c8286289c3a7a2f6c06e53da98b8e333f1e5ae883b8788c477f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fbc1ab809c8286289c3a7a2f6c06e53da98b8e333f1e5ae883b8788c477f13->enter($__internal_a6fbc1ab809c8286289c3a7a2f6c06e53da98b8e333f1e5ae883b8788c477f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_055d841c2bcb077501bbb83330b0082b7b802ad684b0089b8b376554580350f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055d841c2bcb077501bbb83330b0082b7b802ad684b0089b8b376554580350f8->enter($__internal_055d841c2bcb077501bbb83330b0082b7b802ad684b0089b8b376554580350f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"form-group\">

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "            <div class=\"alert alert-success\" role=\"alert\" id=\"success-alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
                <strong> ";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </strong> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        <!-- Mon profil -->
        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 27
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 28
            echo "            <div class=\"alert alert-error\">
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 32
        echo "
        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'widget');
        echo "

                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "datenaissance", array()), 'label', array("label" => "Date de naissance"));
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "datenaissance", array()), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "datenaissance", array()), 'widget');
        echo "

                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numero", array()), 'label', array("label" => "Numéro de la rue"));
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numero", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numero", array()), 'widget');
        echo "

                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "codepostal", array()), 'label', array("label" => "Code Postal"));
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "codepostal", array()), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "codepostal", array()), 'widget');
        echo "

                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "pays", array()), 'label', array("label" => "Pays"));
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "pays", array()), 'errors');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "pays", array()), 'widget');
        echo "

                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "telephone", array()), 'label', array("label" => "Téléphone fixe"));
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "telephone", array()), 'errors');
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "telephone", array()), 'widget');
        echo "

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'errors');
        echo "
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'widget');
        echo "

                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numerocarteid", array()), 'label', array("label" => "Numéro de carte d'identité"));
        echo "
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numerocarteid", array()), 'errors');
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numerocarteid", array()), 'widget');
        echo "

                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "rue", array()), 'label', array("label" => "Nom de la rue"));
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "rue", array()), 'errors');
        echo "
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "rue", array()), 'widget');
        echo "

                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "ville", array()), 'label', array("label" => "Ville"));
        echo "
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "ville", array()), 'errors');
        echo "
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "ville", array()), 'widget');
        echo "

                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "courriel", array()), 'label', array("label" => "Email"));
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "courriel", array()), 'errors');
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "courriel", array()), 'widget');
        echo "

                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "gsm", array()), 'label', array("label" => "Portable"));
        echo "
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "gsm", array()), 'errors');
        echo "
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "gsm", array()), 'widget');
        echo "

            </div>
        </div>
        ";
        // line 92
        if (array_key_exists("imageUser", $context)) {
            echo "  
          <div class=\"col-md-4\">
            <div class=\"form-group\">
                ";
            // line 96
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageName", array()), "html", null, true);
            echo "\" />
            </div>
        </div>
    ";
        }
        // line 100
        echo "    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <div class=\"vich-image\">
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "image", array()), "imageFile", array()), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            ";
        // line 110
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "enregistrer", array()), 'widget');
        echo "
        </div>
    </div>
</div>
";
        // line 115
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_055d841c2bcb077501bbb83330b0082b7b802ad684b0089b8b376554580350f8->leave($__internal_055d841c2bcb077501bbb83330b0082b7b802ad684b0089b8b376554580350f8_prof);

        
        $__internal_a6fbc1ab809c8286289c3a7a2f6c06e53da98b8e333f1e5ae883b8788c477f13->leave($__internal_a6fbc1ab809c8286289c3a7a2f6c06e53da98b8e333f1e5ae883b8788c477f13_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:monProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 115,  345 => 111,  340 => 110,  331 => 103,  326 => 100,  316 => 96,  310 => 92,  303 => 88,  299 => 87,  295 => 86,  290 => 84,  286 => 83,  282 => 82,  277 => 80,  273 => 79,  269 => 78,  264 => 76,  260 => 75,  256 => 74,  251 => 72,  247 => 71,  243 => 70,  238 => 68,  234 => 67,  230 => 66,  219 => 58,  215 => 57,  211 => 56,  206 => 54,  202 => 53,  198 => 52,  193 => 50,  189 => 49,  185 => 48,  180 => 46,  176 => 45,  172 => 44,  167 => 42,  163 => 41,  159 => 40,  154 => 38,  150 => 37,  146 => 36,  140 => 32,  134 => 29,  131 => 28,  129 => 27,  124 => 25,  120 => 23,  111 => 20,  107 => 18,  103 => 17,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"alert alert-success\" role=\"alert\" id=\"success-alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">x</button>
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

                {{ form_label(form.physique.nom, 'Nom') }}
                {{ form_errors(form.physique.nom) }}
                {{ form_widget(form.physique.nom) }}

                {{ form_label(form.physique.datenaissance, 'Date de naissance') }}
                {{ form_errors(form.physique.datenaissance) }}
                {{ form_widget(form.physique.datenaissance) }}

                {{ form_label(form.physique.numero, 'Numéro de la rue') }}
                {{ form_errors(form.physique.numero) }}
                {{ form_widget(form.physique.numero) }}

                {{ form_label(form.physique.codepostal, 'Code Postal') }}
                {{ form_errors(form.physique.codepostal) }}
                {{ form_widget(form.physique.codepostal) }}

                {{ form_label(form.physique.pays, 'Pays') }}
                {{ form_errors(form.physique.pays) }}
                {{ form_widget(form.physique.pays) }}

                {{ form_label(form.physique.telephone, 'Téléphone fixe') }}
                {{ form_errors(form.physique.telephone) }}
                {{ form_widget(form.physique.telephone) }}

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"form-group\">

                {{ form_label(form.physique.prenom, 'Prénom') }}
                {{ form_errors(form.physique.prenom) }}
                {{ form_widget(form.physique.prenom) }}

                {{ form_label(form.physique.numerocarteid, 'Numéro de carte d\\'identité') }}
                {{ form_errors(form.physique.numerocarteid) }}
                {{ form_widget(form.physique.numerocarteid) }}

                {{ form_label(form.physique.rue, 'Nom de la rue') }}
                {{ form_errors(form.physique.rue) }}
                {{ form_widget(form.physique.rue) }}

                {{ form_label(form.physique.ville, 'Ville') }}
                {{ form_errors(form.physique.ville) }}
                {{ form_widget(form.physique.ville) }}

                {{ form_label(form.physique.courriel, 'Email') }}
                {{ form_errors(form.physique.courriel) }}
                {{ form_widget(form.physique.courriel) }}

                {{ form_label(form.physique.gsm, 'Portable') }}
                {{ form_errors(form.physique.gsm) }}
                {{ form_widget(form.physique.gsm) }}

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
                {{ form_widget(form.physique.image.imageFile.file) }}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            {# TOKEN #}
            {{ form_widget(form._token) }}
            {{ form_widget(form.physique.enregistrer) }}
        </div>
    </div>
</div>
{{ form_end(form, {'render_rest': false}) }}
{% endblock %}", "ESFEspaceAbonneBundle:back:monProfil.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/monProfil.html.twig");
    }
}
