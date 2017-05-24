<?php

/* ESFEspaceAbonneBundle:Default:universiteOne.html.twig */
class __TwigTemplate_3eff6c6314349808af25c2409121cf003e3e9203ac49e26251a53907819dfb80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:universiteOne.html.twig", 1);
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
        $__internal_fc3d72854263a3c06287e301cf5c0b695c291836f94ef3a953f5a6046b3f26bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3d72854263a3c06287e301cf5c0b695c291836f94ef3a953f5a6046b3f26bd->enter($__internal_fc3d72854263a3c06287e301cf5c0b695c291836f94ef3a953f5a6046b3f26bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteOne.html.twig"));

        $__internal_750d745405d947cf4cf496225eb2281f811678da86dd44a67f3c4a8a52e1939e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750d745405d947cf4cf496225eb2281f811678da86dd44a67f3c4a8a52e1939e->enter($__internal_750d745405d947cf4cf496225eb2281f811678da86dd44a67f3c4a8a52e1939e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc3d72854263a3c06287e301cf5c0b695c291836f94ef3a953f5a6046b3f26bd->leave($__internal_fc3d72854263a3c06287e301cf5c0b695c291836f94ef3a953f5a6046b3f26bd_prof);

        
        $__internal_750d745405d947cf4cf496225eb2281f811678da86dd44a67f3c4a8a52e1939e->leave($__internal_750d745405d947cf4cf496225eb2281f811678da86dd44a67f3c4a8a52e1939e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a3fcedda0cbedd86aeb506e6e889dc68fe477fadda7590c0c46c45ef281f2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3fcedda0cbedd86aeb506e6e889dc68fe477fadda7590c0c46c45ef281f2ac->enter($__internal_6a3fcedda0cbedd86aeb506e6e889dc68fe477fadda7590c0c46c45ef281f2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47984139ca2bf1e1cd6fc8a0612241ebd4ed9b41cde2dbd05525dd9f0bb7592d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47984139ca2bf1e1cd6fc8a0612241ebd4ed9b41cde2dbd05525dd9f0bb7592d->enter($__internal_47984139ca2bf1e1cd6fc8a0612241ebd4ed9b41cde2dbd05525dd9f0bb7592d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47984139ca2bf1e1cd6fc8a0612241ebd4ed9b41cde2dbd05525dd9f0bb7592d->leave($__internal_47984139ca2bf1e1cd6fc8a0612241ebd4ed9b41cde2dbd05525dd9f0bb7592d_prof);

        
        $__internal_6a3fcedda0cbedd86aeb506e6e889dc68fe477fadda7590c0c46c45ef281f2ac->leave($__internal_6a3fcedda0cbedd86aeb506e6e889dc68fe477fadda7590c0c46c45ef281f2ac_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e9c4f296749eadcde02b9492154dca7d06292c9ede396d8c2021b5a5241d6ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c4f296749eadcde02b9492154dca7d06292c9ede396d8c2021b5a5241d6ccc->enter($__internal_e9c4f296749eadcde02b9492154dca7d06292c9ede396d8c2021b5a5241d6ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a64a0ef7072cdd80ae96564002f126a847973090cad6cd18bc8b3a497049111b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64a0ef7072cdd80ae96564002f126a847973090cad6cd18bc8b3a497049111b->enter($__internal_a64a0ef7072cdd80ae96564002f126a847973090cad6cd18bc8b3a497049111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_a64a0ef7072cdd80ae96564002f126a847973090cad6cd18bc8b3a497049111b->leave($__internal_a64a0ef7072cdd80ae96564002f126a847973090cad6cd18bc8b3a497049111b_prof);

        
        $__internal_e9c4f296749eadcde02b9492154dca7d06292c9ede396d8c2021b5a5241d6ccc->leave($__internal_e9c4f296749eadcde02b9492154dca7d06292c9ede396d8c2021b5a5241d6ccc_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_276a45de93c88d13b04773dcebd39f4d8dde5efb9e94174eda4148e38f79880f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276a45de93c88d13b04773dcebd39f4d8dde5efb9e94174eda4148e38f79880f->enter($__internal_276a45de93c88d13b04773dcebd39f4d8dde5efb9e94174eda4148e38f79880f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c30667465f414f46c3688e3b6d68285107e164b8ec2c90039ad75551f857ec17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30667465f414f46c3688e3b6d68285107e164b8ec2c90039ad75551f857ec17->enter($__internal_c30667465f414f46c3688e3b6d68285107e164b8ec2c90039ad75551f857ec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Etape 1</h2>
            <p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 25
        echo "            <div class=\"form-group\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langueUniversite", array()), 'label', array("label" => "Langue"));
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langueUniversite", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langueUniversite", array()), 'widget');
        echo "

                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'label', array("label" => "Formation"));
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'widget');
        echo "

                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'label', array("label" => "Université"));
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'widget');
        echo "
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 47
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
        </div>
    </div>
";
        
        $__internal_c30667465f414f46c3688e3b6d68285107e164b8ec2c90039ad75551f857ec17->leave($__internal_c30667465f414f46c3688e3b6d68285107e164b8ec2c90039ad75551f857ec17_prof);

        
        $__internal_276a45de93c88d13b04773dcebd39f4d8dde5efb9e94174eda4148e38f79880f->leave($__internal_276a45de93c88d13b04773dcebd39f4d8dde5efb9e94174eda4148e38f79880f_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:universiteOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 49,  176 => 47,  169 => 42,  165 => 41,  157 => 36,  153 => 35,  149 => 34,  144 => 32,  140 => 31,  136 => 30,  131 => 28,  127 => 27,  123 => 26,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Inscription Université - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Etape 1</h2>
            <p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
            {{ form_start(form) }}
            {% if not form.vars.valid %}
                <div class=\"alert alert-error\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}
            <div class=\"form-group\">
                {{ form_label(form.langueUniversite, 'Langue') }}
                {{ form_errors(form.langueUniversite) }}
                {{ form_widget(form.langueUniversite) }}

                {{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.nometablissement, 'Université') }}
                {{ form_errors(form.nometablissement) }}
                {{ form_widget(form.nometablissement) }}
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.reinitialiser) }}
                        {{ form_widget(form.rechercher) }}
                    </div>
                </div>
            </div>
            {# Token CSRF #}
            {{ form_widget(form._token) }}
            
            {{ form_end(form, {'render_rest': false}) }}
        </div>
    </div>
{% endblock %}
", "ESFEspaceAbonneBundle:Default:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/universiteOne.html.twig");
    }
}
