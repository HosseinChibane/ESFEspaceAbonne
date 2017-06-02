<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_5032647d2c31f7992ddca5ac6219669afde5f522b034283d385ee86f67e04047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4d9bd3320008d264fa6f3e929e44d639986a715ecf91deaccc55e6e5d82e8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d9bd3320008d264fa6f3e929e44d639986a715ecf91deaccc55e6e5d82e8d3->enter($__internal_d4d9bd3320008d264fa6f3e929e44d639986a715ecf91deaccc55e6e5d82e8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_8a7a27f92b7912d5cab6d18f697860782fa74c1c5ccb82e813b94eab67b3a4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7a27f92b7912d5cab6d18f697860782fa74c1c5ccb82e813b94eab67b3a4a9->enter($__internal_8a7a27f92b7912d5cab6d18f697860782fa74c1c5ccb82e813b94eab67b3a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_d4d9bd3320008d264fa6f3e929e44d639986a715ecf91deaccc55e6e5d82e8d3->leave($__internal_d4d9bd3320008d264fa6f3e929e44d639986a715ecf91deaccc55e6e5d82e8d3_prof);

        
        $__internal_8a7a27f92b7912d5cab6d18f697860782fa74c1c5ccb82e813b94eab67b3a4a9->leave($__internal_8a7a27f92b7912d5cab6d18f697860782fa74c1c5ccb82e813b94eab67b3a4a9_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_8bfb51d7dd5268d4dbf67d2464fcf7bd81505fd03a68ab9225329b41b0107181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfb51d7dd5268d4dbf67d2464fcf7bd81505fd03a68ab9225329b41b0107181->enter($__internal_8bfb51d7dd5268d4dbf67d2464fcf7bd81505fd03a68ab9225329b41b0107181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_4b22558bcc0d9b6a7eceb00448d67d20714f727fd3d428abe0e2cd56958ad10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b22558bcc0d9b6a7eceb00448d67d20714f727fd3d428abe0e2cd56958ad10a->enter($__internal_4b22558bcc0d9b6a7eceb00448d67d20714f727fd3d428abe0e2cd56958ad10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4b22558bcc0d9b6a7eceb00448d67d20714f727fd3d428abe0e2cd56958ad10a->leave($__internal_4b22558bcc0d9b6a7eceb00448d67d20714f727fd3d428abe0e2cd56958ad10a_prof);

        
        $__internal_8bfb51d7dd5268d4dbf67d2464fcf7bd81505fd03a68ab9225329b41b0107181->leave($__internal_8bfb51d7dd5268d4dbf67d2464fcf7bd81505fd03a68ab9225329b41b0107181_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_19978c2cf6fc21fd16c5e36d6a7ba30d9c3dc2e5b23e5b08590ddeda013a11f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19978c2cf6fc21fd16c5e36d6a7ba30d9c3dc2e5b23e5b08590ddeda013a11f7->enter($__internal_19978c2cf6fc21fd16c5e36d6a7ba30d9c3dc2e5b23e5b08590ddeda013a11f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_e92d3ba9803d2c5b853b6344c5ab9b19571f139e822b42f2a9331f26258c0789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92d3ba9803d2c5b853b6344c5ab9b19571f139e822b42f2a9331f26258c0789->enter($__internal_e92d3ba9803d2c5b853b6344c5ab9b19571f139e822b42f2a9331f26258c0789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e92d3ba9803d2c5b853b6344c5ab9b19571f139e822b42f2a9331f26258c0789->leave($__internal_e92d3ba9803d2c5b853b6344c5ab9b19571f139e822b42f2a9331f26258c0789_prof);

        
        $__internal_19978c2cf6fc21fd16c5e36d6a7ba30d9c3dc2e5b23e5b08590ddeda013a11f7->leave($__internal_19978c2cf6fc21fd16c5e36d6a7ba30d9c3dc2e5b23e5b08590ddeda013a11f7_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_db2fadfe93f4b3ff50f7f03bba9c316207f77952d6ad15f1b3b963cdc1ee1237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2fadfe93f4b3ff50f7f03bba9c316207f77952d6ad15f1b3b963cdc1ee1237->enter($__internal_db2fadfe93f4b3ff50f7f03bba9c316207f77952d6ad15f1b3b963cdc1ee1237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6db7e2517f203426843928e249702a848a302bad10068a6f73f3d22325679a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db7e2517f203426843928e249702a848a302bad10068a6f73f3d22325679a67->enter($__internal_6db7e2517f203426843928e249702a848a302bad10068a6f73f3d22325679a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6db7e2517f203426843928e249702a848a302bad10068a6f73f3d22325679a67->leave($__internal_6db7e2517f203426843928e249702a848a302bad10068a6f73f3d22325679a67_prof);

        
        $__internal_db2fadfe93f4b3ff50f7f03bba9c316207f77952d6ad15f1b3b963cdc1ee1237->leave($__internal_db2fadfe93f4b3ff50f7f03bba9c316207f77952d6ad15f1b3b963cdc1ee1237_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_da63e0bcbb9fd4da6849a2d1146f532ded3f55ac5eb56b7c0ce2d48e6b59e80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da63e0bcbb9fd4da6849a2d1146f532ded3f55ac5eb56b7c0ce2d48e6b59e80b->enter($__internal_da63e0bcbb9fd4da6849a2d1146f532ded3f55ac5eb56b7c0ce2d48e6b59e80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_269851610f0dadc4a28ae727e1b7f50009287a538f0ce0ba61e731342f25e547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269851610f0dadc4a28ae727e1b7f50009287a538f0ce0ba61e731342f25e547->enter($__internal_269851610f0dadc4a28ae727e1b7f50009287a538f0ce0ba61e731342f25e547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_269851610f0dadc4a28ae727e1b7f50009287a538f0ce0ba61e731342f25e547->leave($__internal_269851610f0dadc4a28ae727e1b7f50009287a538f0ce0ba61e731342f25e547_prof);

        
        $__internal_da63e0bcbb9fd4da6849a2d1146f532ded3f55ac5eb56b7c0ce2d48e6b59e80b->leave($__internal_da63e0bcbb9fd4da6849a2d1146f532ded3f55ac5eb56b7c0ce2d48e6b59e80b_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
