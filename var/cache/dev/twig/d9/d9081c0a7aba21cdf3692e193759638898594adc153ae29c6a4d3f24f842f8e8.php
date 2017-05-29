<?php

/* @ESFEspaceAbonne/back/monProfil.html.twig */
class __TwigTemplate_1ddc46c2028a56c2f26b457d4176ed765e9063c81c82cabddd26d0f3f42266f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/monProfil.html.twig", 2);
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
        $__internal_bc6a29ae68cd4f3cca224d4def0fa68b3667a6ebf0280dfcffc68a258b803854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6a29ae68cd4f3cca224d4def0fa68b3667a6ebf0280dfcffc68a258b803854->enter($__internal_bc6a29ae68cd4f3cca224d4def0fa68b3667a6ebf0280dfcffc68a258b803854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/monProfil.html.twig"));

        $__internal_07a918ff6fe6092f122786a1f4099ac8fc244aeb051650988e4c098f4a677df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a918ff6fe6092f122786a1f4099ac8fc244aeb051650988e4c098f4a677df9->enter($__internal_07a918ff6fe6092f122786a1f4099ac8fc244aeb051650988e4c098f4a677df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/monProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6a29ae68cd4f3cca224d4def0fa68b3667a6ebf0280dfcffc68a258b803854->leave($__internal_bc6a29ae68cd4f3cca224d4def0fa68b3667a6ebf0280dfcffc68a258b803854_prof);

        
        $__internal_07a918ff6fe6092f122786a1f4099ac8fc244aeb051650988e4c098f4a677df9->leave($__internal_07a918ff6fe6092f122786a1f4099ac8fc244aeb051650988e4c098f4a677df9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_31ae87e569a5e236a13a5c602c1a2329606f1ace8d30170f80a6bba398db7b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ae87e569a5e236a13a5c602c1a2329606f1ace8d30170f80a6bba398db7b1b->enter($__internal_31ae87e569a5e236a13a5c602c1a2329606f1ace8d30170f80a6bba398db7b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cb3d1eed92c6d86d95138f6750bd21c2c64c544c6ecb61c4d14bd3334b225fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb3d1eed92c6d86d95138f6750bd21c2c64c544c6ecb61c4d14bd3334b225fd->enter($__internal_8cb3d1eed92c6d86d95138f6750bd21c2c64c544c6ecb61c4d14bd3334b225fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Mon Profil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8cb3d1eed92c6d86d95138f6750bd21c2c64c544c6ecb61c4d14bd3334b225fd->leave($__internal_8cb3d1eed92c6d86d95138f6750bd21c2c64c544c6ecb61c4d14bd3334b225fd_prof);

        
        $__internal_31ae87e569a5e236a13a5c602c1a2329606f1ace8d30170f80a6bba398db7b1b->leave($__internal_31ae87e569a5e236a13a5c602c1a2329606f1ace8d30170f80a6bba398db7b1b_prof);

    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c0b7f531c2a5e3951cc5ccc73ae522dc1b34908b0fbfcd972c476ff7ce523154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b7f531c2a5e3951cc5ccc73ae522dc1b34908b0fbfcd972c476ff7ce523154->enter($__internal_c0b7f531c2a5e3951cc5ccc73ae522dc1b34908b0fbfcd972c476ff7ce523154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_52c356c03b9c1b05d699efeb46701e211f6dc43d1eae3c80279c54f6cfe1f5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c356c03b9c1b05d699efeb46701e211f6dc43d1eae3c80279c54f6cfe1f5b9->enter($__internal_52c356c03b9c1b05d699efeb46701e211f6dc43d1eae3c80279c54f6cfe1f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 9
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
";
        
        $__internal_52c356c03b9c1b05d699efeb46701e211f6dc43d1eae3c80279c54f6cfe1f5b9->leave($__internal_52c356c03b9c1b05d699efeb46701e211f6dc43d1eae3c80279c54f6cfe1f5b9_prof);

        
        $__internal_c0b7f531c2a5e3951cc5ccc73ae522dc1b34908b0fbfcd972c476ff7ce523154->leave($__internal_c0b7f531c2a5e3951cc5ccc73ae522dc1b34908b0fbfcd972c476ff7ce523154_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_56c38e26d55714780cab29f70ab1e7133b23097f2f9f0b9f17ffb11f90c9b6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c38e26d55714780cab29f70ab1e7133b23097f2f9f0b9f17ffb11f90c9b6b1->enter($__internal_56c38e26d55714780cab29f70ab1e7133b23097f2f9f0b9f17ffb11f90c9b6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_57d44df45b186db015fe42dc4c3e77e7c285bbf12508d3461deddf1d75941351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d44df45b186db015fe42dc4c3e77e7c285bbf12508d3461deddf1d75941351->enter($__internal_57d44df45b186db015fe42dc4c3e77e7c285bbf12508d3461deddf1d75941351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"form-group\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <strong> ";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </strong> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        <!-- Mon profil -->
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 25
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 26
            echo "            <div class=\"alert alert-error\">
                ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 30
        echo "
        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "

                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'label', array("label" => "Date de naissance"));
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "datenaissance", array()), 'widget');
        echo "

                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'label', array("label" => "Numéro de la rue"));
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'errors');
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "numero", array()), 'widget');
        echo "

                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'label', array("label" => "Code Postal"));
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "codepostal", array()), 'widget');
        echo "

                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'label', array("label" => "Pays"));
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "pays", array()), 'widget');
        echo "

                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'label', array("label" => "Téléphone fixe"));
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'errors');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "telephone", array()), 'widget');
        echo "

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "

                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'label', array("label" => "Numéro de carte d'identité"));
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'errors');
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numerocarteid", array()), 'widget');
        echo "

                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'label', array("label" => "Nom de la rue"));
        echo "
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'errors');
        echo "
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "rue", array()), 'widget');
        echo "

                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'label', array("label" => "Ville"));
        echo "
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'errors');
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "ville", array()), 'widget');
        echo "

                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'label', array("label" => "Email"));
        echo "
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "courriel", array()), 'widget');
        echo "

                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'label', array("label" => "Portable"));
        echo "
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personne", array()), "gsm", array()), 'widget');
        echo "

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"form-group\">
            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageFile"), "my_thumb"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageName", array()), "html", null, true);
        echo "\" />
           </div>
       </div>

       <div class=\"col-md-4\">
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
        
        $__internal_57d44df45b186db015fe42dc4c3e77e7c285bbf12508d3461deddf1d75941351->leave($__internal_57d44df45b186db015fe42dc4c3e77e7c285bbf12508d3461deddf1d75941351_prof);

        
        $__internal_56c38e26d55714780cab29f70ab1e7133b23097f2f9f0b9f17ffb11f90c9b6b1->leave($__internal_56c38e26d55714780cab29f70ab1e7133b23097f2f9f0b9f17ffb11f90c9b6b1_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/monProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 112,  336 => 108,  331 => 107,  322 => 100,  310 => 93,  300 => 86,  296 => 85,  292 => 84,  287 => 82,  283 => 81,  279 => 80,  274 => 78,  270 => 77,  266 => 76,  261 => 74,  257 => 73,  253 => 72,  248 => 70,  244 => 69,  240 => 68,  235 => 66,  231 => 65,  227 => 64,  216 => 56,  212 => 55,  208 => 54,  203 => 52,  199 => 51,  195 => 50,  190 => 48,  186 => 47,  182 => 46,  177 => 44,  173 => 43,  169 => 42,  164 => 40,  160 => 39,  156 => 38,  151 => 36,  147 => 35,  143 => 34,  137 => 30,  131 => 27,  128 => 26,  126 => 25,  121 => 23,  118 => 22,  109 => 19,  106 => 18,  102 => 17,  90 => 15,  76 => 10,  73 => 9,  64 => 8,  51 => 5,  42 => 4,  11 => 2,);
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

        <div class=\"col-md-4\">
            <div class=\"form-group\">
            <img src=\"{{ vich_uploader_asset(imageUser, 'imageFile' )  | imagine_filter('my_thumb') }}\" alt=\"{{ imageUser.imageName }}\" />
           </div>
       </div>

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
{% endblock %}", "@ESFEspaceAbonne/back/monProfil.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\monProfil.html.twig");
    }
}
